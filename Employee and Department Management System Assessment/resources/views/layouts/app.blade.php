<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>@yield('title')</title>

            <style type="text/tailwindcss">
            .btn{
                @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
            }
            .link{
                @apply font-medium text-gray-700 underline decoration-pink-500
            }
            .a_link{
                @apply block bg-white p-4 shadow rounded-lg hover:bg-gray-100 transition duration-300
            }
            .error{
                @apply text-red-500 text-sm
            }
            .success{
                @apply relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700
            }
            .info_label{
                @apply font-bold text-lg mt-4 mb-2
            }
            .info_value{
                @apply text-gray-700
            }
            .look_card{
                @apply bg-white rounded-lg shadow-md my-5
            }

            label{
                @apply block uppercase text-slate-700 mb-2
            }

            input ,
            textarea{
                @apply shadow-sm  border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:outline-none
            }
            </style>

            @yield('styles')

        </head>

        <body class="container mx-auto mt-10 mb-10 max-w-lg">

            <h1 class="text-2xl mb-4 ">@yield('page_title')</h1>

            @if (session()->has('success'))
            <div class="success">
                <div class="font-bold">
                    Success!
                </div>
                    {{ session('success') }}
            </div>
            @endif


            <div>
                @yield('content')
            </div>

            @yield('javascript')
            <script src="https://cdn.tailwindcss.com"></script>

        </body>

    </html>
