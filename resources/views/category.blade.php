<div class="widget widget_categories">
    <div class="widget_title">
        <h4><span>Categories</span></h4>
        </div>
    <ul class="arrows_list list_style">
        @forelse (App\Models\category::all() as $category)
        <li><a href="#"> {{ $category->name }} ({{ $category->posts->count() }})</a></li>
        @empty
        <li><a href="#"> No category Found!</a></li>
        @endforelse
    </ul>
</div>
