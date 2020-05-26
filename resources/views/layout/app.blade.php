<!doctype html>
<html lang ="{{str_replace('_','_',app()->getLocale())}}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!--csrf token-->
<meta name="csrf-token" content="{{csrf_token()}}">

<title>{{config('app.name','Laravel')}}</title>

<script src="{{asset('js/app.js)}}" defer></script>

<link rel="dns-prefetch" href="//fonts.gstatic.com">