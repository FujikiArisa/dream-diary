@if ($paginator->hasPages())
<div id="pagenation">
    <p>{{$paginator->currentPage()}}/{{$paginator->lastPage()}}</p>

    <div>
        <!-- Previous Page Link -->
        <div>
            @if ($paginator->onFirstPage())
            <span class="material-symbols-outlined">
                keyboard_double_arrow_left
            </span>
            <span class="material-symbols-outlined">
                keyboard_arrow_left
            </span>

            @else
            <a href="{{ $paginator->url(1) }}">
                <span class="material-symbols-outlined">
                    keyboard_double_arrow_left
                </span>
            </a>
            <a href="{{ $paginator->previousPageUrl() }}">
                <span class="material-symbols-outlined">
                    keyboard_arrow_left
                </span>
            </a>
            @endif
        </div>

        <!-- -- Pagination Elemnts -- -->
        <ul>
            {{-- 定数よりもページ数が多い時 --}}
            @if ($paginator->lastPage() > config('paginate.PAGINATE.LINK_NUM'))

                {{-- 現在ページが表示するリンクの中心位置よりも左の時 --}}
                @if ($paginator->currentPage() <= floor(config('paginate.PAGINATE.LINK_NUM') / 2))
                    <?php $start_page = 1; ?>
                    <?php $end_page = config('paginate.PAGINATE.LINK_NUM'); ?>

                {{-- 現在ページが表示するリンクの中心位置よりも右の時 --}}
                @elseif ($paginator->currentPage() > $paginator->lastPage() - floor(config('paginate.PAGINATE.LINK_NUM') / 2))
                <?php $start_page = $paginator->lastPage() - (config('paginate.PAGINATE.LINK_NUM') - 1); ?>
                <?php $end_page = $paginator->lastPage(); ?>

                {{-- 現在ページが表示するリンクの中心位置の時 --}}
                @else
                <?php $start_page = $paginator->currentPage() - (floor((config('paginate.PAGINATE.LINK_NUM') % 2 == 0 ? config('paginate.PAGINATE.LINK_NUM') - 1 : config('paginate.PAGINATE.LINK_NUM'))  / 2)); ?>
                <?php $end_page = $paginator->currentPage() + floor(config('paginate.PAGINATE.LINK_NUM') / 2); ?>
                @endif

            {{-- 定数よりもページ数が少ない時 --}}
            @else
                <?php $start_page = 1; ?>
                <?php $end_page = $paginator->lastPage(); ?>
            @endif

            {{-- 処理部分 --}}
            @for ($i = $start_page; $i <= $end_page; $i++)
                @if ($i==$paginator->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endfor
        </ul>

        <!-- -- Next Page Link -- -->
        <div>
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">
                <span class="material-symbols-outlined">
                    keyboard_arrow_right
                </span>
            </a>
            <a href="{{ $paginator->url($paginator->lastPage()) }}">
                <span class="material-symbols-outlined">
                    keyboard_double_arrow_right
                </span>
            </a>

            @else
            <span class="material-symbols-outlined">
                keyboard_arrow_right
            </span>
            <span class="material-symbols-outlined">
                keyboard_double_arrow_right
            </span>
            @endif
        </div>
    </div>
</div>
@endif