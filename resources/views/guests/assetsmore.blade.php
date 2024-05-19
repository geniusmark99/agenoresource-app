@extends('layouts.general')
@section('app-title','Contact us')

@section('app-content')

<div class="flex flex-col mt-4">
<h3 class=" px-4 sm:px-6 lg:px-28 text-left text-ageno lg:text-3xl font-bold dark:text-white">Top Latest assets</h3>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="container">
        <h1>{{ $asset->asset_name }}</h1>
        <p><strong>UID:</strong> {{ $asset->uid }}</p>
        <p><strong>Project ID:</strong> {{ $asset->project_id }}</p>
        <p><strong>Asset Type:</strong> {{ $asset->asset_type }}</p>
        <p><strong>Location:</strong> {{ $asset->asset_location_details }}</p>
        <p><strong>Information:</strong> {{ $asset->asset_information }}</p>
        @if($asset->pictures)
            <div>
                <strong>Pictures:</strong>
                <div>{!! $asset->pictures !!}</div>
            </div>
        @endif
        @if($asset->video)
            <div>
                <strong>Video:</strong>
                <div>{!! $asset->video !!}</div>
            </div>
        @endif
        @if($asset->technical_report)
            <div>
                <strong>Technical Report:</strong>
                <div>{!! $asset->technical_report !!}</div>
            </div>
        @endif
        <p><strong>Price:</strong> {{ $asset->price }}</p>
        @if($asset->coordinates)
            <p><strong>Coordinates:</strong> {{ $asset->coordinates }}</p>
        @endif
        @if($asset->land_size)
            <p><strong>Land Size:</strong> {{ $asset->land_size }}</p>
        @endif
        @if($asset->mineral_details)
            <p><strong>Mineral Details:</strong> {{ $asset->mineral_details }}</p>
        @endif
        @if($asset->reserve_deposit)
            <p><strong>Reserve Deposit:</strong> {{ $asset->reserve_deposit }}</p>
        @endif
        @if($asset->jorc_report)
            <p><strong>JORC Report:</strong> {{ $asset->jorc_report }}</p>
        @endif
        <p><strong>Opportunity Type:</strong> {{ $asset->opportunity_type }}</p>
        @if($asset->geological_location)
            <p><strong>Geological Location:</strong> {{ $asset->geological_location }}</p>
        @endif
        @if($asset->contact_information)
            <p><strong>Contact Information:</strong> {{ $asset->contact_information }}</p>
        @endif
        <p><strong>Date Added:</strong> {{ $asset->date_added }}</p>
        <p><strong>Times Viewed:</strong> {{ $asset->times_viewed }}</p>
        <p><strong>Paid:</strong> {{ $asset->paid ? 'Yes' : 'No' }}</p>
        <p><strong>Duration Date:</strong> {{ $asset->duration_date }}</p>
        <p><strong>Active:</strong> {{ $asset->active ? 'Active' : 'Inactive' }}</p>
        <p><strong>User Name:</strong> {{ $asset->user->name }}</p>
    </div>
{{-- {{ $asset }} --}}
</div>
</div>



@endsection