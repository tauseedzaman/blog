<div class="widget widget_tags">
    <div class="widget_title">
        <h4><span>Tags Widget</span></h4>
    </div>
    <ul class="tags">
        @forelse (App\Models\tages::all() as $tage)
        <li><a href="#"> {{ $tage->name }}</a></li>
        @empty
        <li><a href="#"> No category Found!</a></li>
        @endforelse
    </ul>
</div>
