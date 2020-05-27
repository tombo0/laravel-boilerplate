@extends('backend.layouts.app')

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('User Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link icon="c-icon cil-plus" class="card-header-action" :href="route('admin.auth.user.create')" :text="__('Create User')" />
        </x-slot>

        <x-slot name="body">
            <livewire:users-table />
        </x-slot>
    </x-backend.card>
@endsection
