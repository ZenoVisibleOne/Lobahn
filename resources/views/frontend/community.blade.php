<h2>DONEC SED VARIUS FEILS</h2>

@foreach ($communities as $key => $community)
	<div class="row">
		<div class="col-md-6">
			@foreach($community->images as $key => $image)
                @php
                    $url = \Storage::url('community_image/'.$image->image);
                    $path = asset($url);
                @endphp
                <li style="width: 100%;list-style: none;margin: 5px 0;">
                    <img class="" src="{{ $path }}" alt="{{ $data->title ?? '-' }}" max-width="300px" height="auto">
                </li>
            @endforeach
			<h3><a href="#">{{ $community->title ?? '' }}</a></h3>
			<span>{{ $community->created_by ?? ''}}</span>
			<span>{{ Carbon\Carbon::parse($community->created_at)->format('d M Y h:m') }}</span>
			<h5>{!! $community->description ?? '' !!}</h5>
		</div>
	</div> 

@endforeach
                   