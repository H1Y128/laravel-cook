<?php

use Livewire\Volt\Component;
use App\Models\Ingredient;
use App\Models\Category;
use App\Models\MajorCategory;
use Livewire\Attributes\Url;

new class extends Component {
    #[Url(as: 'category')]
    public $selectedCategoryId = null;

    #[Url(as: 'ingredient')]
    public $selectedIngredientId = null;

    public function selectCategory($id)
    {
        $this->selectedCategoryId = $id;
        $this->selectedIngredientId = null;
    }

    public function selectIngredient($id)
    {
        $this->selectedIngredientId = $id;
    }

    public function with(): array
    {
        $selectedIngredient = $this->selectedIngredientId ? Ingredient::find($this->selectedIngredientId) : null;
        $recipes = collect();
        if ($selectedIngredient) {
            $recipes = $selectedIngredient->recipes()->with('ingredients')->get();
        }

        return [
            'major_categories' => MajorCategory::all(),
            'categories' => Category::all(),
            'ingredients' => $this->selectedCategoryId
                ? Ingredient::where('category_id', $this->selectedCategoryId)->get()
                : collect(),
            'recipes' => $recipes,
            'current_ingredient_name' => $selectedIngredient ? $selectedIngredient->name : null,
        ];
    }
}; ?>

<div class="row">
    <div class="d-md-none mb-3">
        <button class="btn btn-outline-primary w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
            カテゴリーを選択する
        </button>
    </div>

    <div class="col-12 col-md-2">
        <div class="offcanvas-md offcanvas-start" tabindex="-1" id="sidebarMenu" style="--bs-offcanvas-width: 70vw;">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">カテゴリー</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"></button>
            </div>
            <div class="offcanvas-body p-0 p-md-2">
                <div class="w-100">
                    <h2 class="d-none d-md-block h5 mb-3 text-secondary border-bottom pb-2">カテゴリー</h2>
                    <ul class="list-group list-group-flush">
                        @foreach ($major_categories as $major_category)
                            <a href="#category-{{ $major_category->id }}" class="list-group-item list-group-item-action text-primary fw-bold" data-bs-toggle="collapse">
                                {{ $major_category->name }}
                            </a>
                            <div class="collapse {{ $categories->where('id', $selectedCategoryId)->first()?->major_category_id === $major_category->id ? 'show' : '' }}" id="category-{{ $major_category->id }}">
                                <div class="list-group ms-2">
                                    @foreach ($categories as $category)
                                        @if ($category->major_category_id === $major_category->id)
                                        <button type="button" wire:click="selectCategory({{ $category->id }})" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                                            class="list-group-item list-group-item-action border-0 {{ $selectedCategoryId == $category->id ? 'text-success fw-bold' : '' }}">
                                            ・ {{ $category->name }}
                                        </button>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-10">
        <div class="container text-center px-0 px-md-3">
            <!-- <div wire:loading class="text-secondary mb-2 small">読み込み中...</div> -->

            <div class="row g-2 g-md-3">
                @if ($ingredients->isEmpty())
                    <p class="mt-5 text-secondary">カテゴリーを選択してください。</p>
                @else
                    @foreach ($ingredients as $ingredient)
                    <div class="col-6 col-md-3 col-lg-2 mb-2">
                        <div wire:click="selectIngredient({{ $ingredient->id }})"
                            class="card h-100 shadow-sm border-2 {{ $selectedIngredientId == $ingredient->id ? 'border-primary' : 'border-transparent' }}"
                            style="cursor: pointer;">
                            <img src="{{ asset('images/' . $ingredient->name . '.jpg') }}" class="card-img-top"
                                style="height: 100px; object-fit: cover;"
                                onerror="this.src='https://placehold.jp/150x100.png?text=No+Image'">
                            <div class="card-body p-2">
                                <p class="card-text fw-bold small mb-0">{{ $ingredient->name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>

            <hr class="my-5">
            <div class="text-start">
                <h3 class="h5 mb-4 px-2">
                    @if($current_ingredient_name)
                        「<span class="text-primary">{{ $current_ingredient_name }}</span>」を使ったレシピ
                    @else
                        食材を選択してください
                    @endif
                </h3>

                <div class="row g-3">
                    @forelse ($recipes as $recipe)
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card shadow-sm h-100 border-0 bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title h6 fw-bold text-primary mb-0">
                                            {{ $recipe->name }}
                                        </h5>
                                        @if($recipe->volume)
                                            <span class="badge rounded-pill bg-light text-dark border small fw-normal">
                                                {{ $recipe->volume }}人分
                                            </span>
                                        @endif
                                    </div>

                                    {{-- 材料リストを表示 --}}
                                    <div class="mt-3 mb-3">
                                        <p class="small fw-bold mb-1 text-secondary">【材料】</p>
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($recipe->ingredients as $recipeIngredient)
                                            <li class="small d-flex justify-content-between border-bottom border-white py-1">
                                                <span>{{ $recipeIngredient->name }}</span>
                                                <span>
                                                    @php 
                                                        $unitName = $recipeIngredient->pivot->unit?->name ?? '個';
                                                        $quantity = $recipeIngredient->pivot->quantity;
                                                    @endphp
                                                    
                                                    @if ($unitName === '少々' || $unitName === '適量')
                                                        {{ $unitName }}
                                                    @elseif ($unitName === '大さじ' || $unitName === '小さじ')
                                                        {{ $unitName }}{{ $quantity }}
                                                    @else
                                                        {{ $quantity }}{{ $unitName }}
                                                    @endif
                                                </span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        @if($selectedIngredientId)
                            <p class="text-muted px-2">レシピが見つかりませんでした。</p>
                        @endif
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>