@extends('layouts.app')

@section('content')

@php
// $mypage = \Request::getRequestUri();
// if ($mypage[0] === '/')
//   $mypage = substr($mypage, 1);
//echo $mypage; // -> /register
@endphp

{{-- /* switch ($mypage) {
        case 'registar':
        
            break;
        case 'nosave':

          break;
    } */ --}}

@livewire('auth.register')
{{-- 
// Get the current URL without the query string...
//echo url()->current();
 
// Get the current URL including the query string...
//echo url()->full();
 
// Get the full URL for the previous request...
//echo url()->previous();
--}}



@endsection