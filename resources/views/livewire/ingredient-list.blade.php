<?php

use Livewire\Volt\Component;
use App\Models\Ingredient;
use App\Models\Category;
use App\Models\MajorCategory;
use Livewire\Attributes\Url;

new class extends Component {
    #[Url(as: 'major')]
    public $selectedMajorCategoryId = null;

    #[Url(as: 'category')]
    public $selectedCategoryId = null;

    #[Url(as: 'ingredient')]
    public $selectedIngredientId = null;

    #[Url(as: 'q')]
    public $search = '';

    // 大カテゴリーを選択
    public function selectMajorCategory($id)
    {
        if ($this->selectedMajorCategoryId == $id) {
            $this->selectedMajorCategoryId = null;
        } else {
            $this->selectedMajorCategoryId = $id;
        }
        $this->selectedCategoryId = null;
        $this->selectedIngredientId = null;
        $this->search = ''; // 検索もリセットする場合
    }

    // 中カテゴリーを選択
    public function selectCategory($id)
    {
        $this->selectedCategoryId = ($this->selectedCategoryId == $id) ? null : $id;
        $this->selectedIngredientId = null;
    }

    // 食材を選択
    public function selectIngredient($id)
    {
        $this->selectedIngredientId = ($this->selectedIngredientId == $id) ? null : $id;
    }

    // 検索窓入力時
    public function updatedSearch()
    {
        $this->selectedIngredientId = null;
        // 検索中はカテゴリー選択を一旦解除しない方が使いやすいため維持
    }

    public function with(): array
    {
        // 1. 食材のクエリ構築
        $ingredientsQuery = Ingredient::query();

        if ($this->search) {
            // 検索ワードがある場合は最優先
            $ingredientsQuery->where('name', 'like', '%' . $this->search . '%');
        } elseif ($this->selectedCategoryId) {
            // 中カテゴリー選択中
            $ingredientsQuery->where('category_id', $this->selectedCategoryId);
        } elseif ($this->selectedMajorCategoryId) {
            // 大カテゴリー選択中（その配下の中カテゴリーをすべて対象にする）
            $categoryIds = Category::where('major_category_id', $this->selectedMajorCategoryId)->pluck('id');
            $ingredientsQuery->whereIn('category_id', $categoryIds);
        } else {
            // 何も選択されていない場合は空（または全表示にするなら get() ）
            // ここでは初期状態を「全表示」としておきます
        }

        $ingredients = $ingredientsQuery->get();

        // 2. 選択された食材に基づくレシピの取得
        $selectedIngredient = $this->selectedIngredientId ? Ingredient::find($this->selectedIngredientId) : null;
        $recipes = collect();
        if ($selectedIngredient) {
            $recipes = $selectedIngredient->recipes()->with('ingredients')->get();
        }

        return [
            'major_categories' => MajorCategory::all(),
            'categories' => $this->selectedMajorCategoryId
                ? Category::where('major_category_id', $this->selectedMajorCategoryId)->get()
                : collect(),
            'ingredients' => $ingredients,
            'recipes' => $recipes,
            'current_ingredient_name' => $selectedIngredient ? $selectedIngredient->name : null,
        ];
    }
}; ?>

<div class="row">
    <div class="col-md-3 col-lg-2">
        <div class="d-md-none mb-3">
            <button class="btn btn-primary w-100 py-2 shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
                <i class="bi bi-filter-left me-2"></i>カテゴリーを選択
            </button>
        </div>

        <div class="offcanvas-md offcanvas-start" tabindex="-1" id="sidebarMenu">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title fw-bold">カテゴリー</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"></button>
            </div>
            <div class="offcanvas-body p-3 p-md-0">
                <div class="w-100">
                    <h6 class="text-secondary small fw-bold text-uppercase mb-2 d-none d-md-block" style="letter-spacing: 1px;">Major Category</h6>
                    <div class="list-group list-group-flush mb-4 shadow-sm rounded border overflow-hidden">
                        <button wire:click="$set('selectedMajorCategoryId', null); $set('selectedCategoryId', null);"
                            class="list-group-item list-group-item-action {{ is_null($selectedMajorCategoryId) ? 'active' : '' }}">
                            すべて表示
                        </button>
                        @foreach ($major_categories as $major)
                        <button wire:click="selectMajorCategory({{ $major->id }})"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ $selectedMajorCategoryId == $major->id ? 'bg-primary-subtle fw-bold' : '' }}">
                            {{ $major->name }}
                            <i class="bi {{ $selectedMajorCategoryId == $major->id ? 'bi-chevron-down' : 'bi-chevron-right' }} small"></i>
                        </button>
                        @endforeach
                    </div>

                    @if($selectedMajorCategoryId && $categories->count() > 0)
                    <h6 class="text-secondary small fw-bold text-uppercase mb-2" style="letter-spacing: 1px;">Sub Category</h6>
                    <div class="list-group list-group-flush shadow-sm rounded border overflow-hidden mb-4">
                        @foreach ($categories as $category)
                        <button wire:click="selectCategory({{ $category->id }})"
                            class="list-group-item list-group-item-action py-2 {{ $selectedCategoryId == $category->id ? 'text-primary fw-bold bg-light' : '' }}">
                            <i class="bi bi-dot me-1"></i>{{ $category->name }}
                        </button>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-lg-10">
        <div class="input-group mb-4 shadow-sm rounded-pill overflow-hidden border bg-white">
            <span class="input-group-text bg-white border-0 ps-3"><i class="bi bi-search text-muted"></i></span>
            <input type="text" wire:model.live="search" class="form-control border-0 py-2 shadow-none" placeholder="食材名で検索...">
            @if($search)
            <button class="btn btn-link text-muted pe-3" wire:click="$set('search', '')"><i class="bi bi-x-circle-fill"></i></button>
            @endif
        </div>

        <div class="row g-2 g-md-3 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-xl-6">
            @forelse ($ingredients as $ingredient)
            <div class="col">
                <div wire:click="selectIngredient({{ $ingredient->id }})"
                    class="card h-100 border-2 transition-all {{ $selectedIngredientId == $ingredient->id ? 'border-primary shadow' : 'border-transparent shadow-sm' }}"
                    style="cursor: pointer; transition: all 0.2s;">

                    <div class="ratio ratio-1x1 bg-light rounded-top overflow-hidden">
                        <img src="{{ asset('images/' . $ingredient->name . '.jpg') }}"
                            class="card-img-top object-fit-cover"
                            onerror="this.src='https://placehold.jp/24/f0f0f0/999999/200x200.png?text={{ $ingredient->name }}'">
                    </div>
                    <div class="card-body p-2 text-center">
                        <p class="card-text fw-bold small mb-0 text-truncate">{{ $ingredient->name }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-search fs-1 text-light"></i>
                <p class="text-secondary mt-2">食材が見つかりませんでした。</p>
            </div>
            @endforelse
        </div>

        <div class="mt-5 pt-4 border-top">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="h5 fw-bold mb-0">
                    <i class="bi bi-receipt me-2 text-primary"></i>
                    @if($current_ingredient_name)
                    「{{ $current_ingredient_name }}」を使ったレシピ
                    @else
                    食材を選択してください
                    @endif
                </h3>
                @if($recipes->count() > 0)
                <span class="badge bg-primary rounded-pill">{{ $recipes->count() }} 件</span>
                @endif
            </div>

            <div class="row g-3">
                @forelse ($recipes as $recipe)
                <div class="col-12 col-xl-6">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <div class="p-3 border-bottom d-flex justify-content-between align-items-center bg-white">
                                <h5 class="card-title h6 fw-bold mb-0 text-dark">{{ $recipe->name }}</h5>
                                <span class="small text-muted"><i class="bi bi-people me-1"></i>{{ $recipe->volume ?? '?' }}人分</span>
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row g-2">
                                    @foreach ($recipe->ingredients as $ri)
                                    <div class="col-6 small d-flex justify-content-between align-items-center">
                                        <span class="{{ $ri->id == $selectedIngredientId ? 'text-primary fw-bold' : '' }}">
                                            <i class="bi bi-dot"></i>{{ $ri->name }}
                                        </span>
                                        <span class="text-muted" style="font-size: 0.75rem;">
                                            @php
                                            $unitName = $ri->pivot->unit?->name ?? '個';
                                            $quantity = $ri->pivot->quantity;
                                            @endphp

                                            @if ($unitName === '少々' || $unitName === '適量')
                                            {{ $unitName }}
                                            @elseif ($unitName === '大さじ' || $unitName === '小さじ')
                                            {{ $unitName }}{{ $quantity }}
                                            @else
                                            {{ $quantity }}{{ $unitName }}
                                            @endif
                                        </span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @if($selectedIngredientId)
                <div class="col-12">
                    <div class="alert alert-light border text-center py-4">
                        <i class="bi bi-info-circle me-2"></i>この食材を使ったレシピは現在登録されていません。
                    </div>
                </div>
                @endif
                @endforelse
            </div>
        </div>
    </div>

    @if($current_ingredient_name)
    <div class="fixed-bottom d-md-none bg-white border-top p-3 shadow-lg" style="z-index: 1050;">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold"><i class="bi bi-check2-circle text-primary me-2"></i>{{ $current_ingredient_name }}</div>
            <button class="btn btn-sm btn-outline-secondary rounded-pill px-3" wire:click="$set('selectedIngredientId', null)">解除</button>
        </div>
    </div>
    @endif
</div>