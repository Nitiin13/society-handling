@if (Auth::guard('admin')->check())
<p class="text-success">
  <a href="{{route('complaint.index')}}" class="btn btn-success"> Add Complaint </a>
</p>
@endif
@if (Auth::guard('web')->check())
<p class="text-danger">
  <Strong> You Don't Have Access </STRONG>
</p>
@endif