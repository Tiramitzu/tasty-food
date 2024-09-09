@extends("layouts.app")
@section("title", "Login")
@section("content")
    <div class="w-screen h-screen bg-blue-400">
        <div class="flex flex-col flex-1 justify-center items-center px-4 h-full sm:px-0">
            <div class="flex w-full bg-white rounded-lg shadow-lg sm:mx-0 sm:w-3/4 lg:w-1/2" style="height: 500px">
                <div class="flex flex-col p-4 w-full md:w-1/2">
                    <div class="flex flex-col flex-1 justify-center mb-8">
                        <h1 class="text-4xl font-thin text-center">Welcome Back</h1>
                        <div class="mt-4 w-full">
                            <form class="mx-auto w-3/4 form-horizontal" method="POST" action="{{ route("proc_login") }}">
                                @csrf
                                <div class="flex flex-col mt-4">
                                    <input id="username" type="text"
                                        class="flex-grow px-2 h-8 rounded border border-grey-400" name="username"
                                        value="" placeholder="Username">
                                </div>
                                <div class="flex flex-col mt-4">
                                    <input id="password" type="password"
                                        class="flex-grow px-2 h-8 rounded border border-grey-400" name="password" required
                                        placeholder="Password">
                                </div>
                                <div class="flex flex-col mt-8">
                                    <button type="submit"
                                        class="py-2 px-4 text-sm font-semibold text-white bg-blue-500 rounded hover:bg-blue-700">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="hidden rounded-r-lg md:block md:w-1/2"
                    style="background: url('{{ asset("assets/brooke-lark-nBtmglfY0HU-unsplash.jpg") }}'); background-size: cover; background-position: center center;">
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get("error") || $errors->any())
        <div id="toast-danger"
            class="flex fixed right-5 bottom-5 items-center p-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow"
            role="alert">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">Username atau password salah.</div>
            <button type="button"
                class="inline-flex justify-center items-center p-1.5 -my-1.5 -mx-1.5 ml-auto w-8 h-8 text-gray-400 bg-white rounded-lg hover:text-gray-900 hover:bg-gray-100 focus:ring-2 focus:ring-gray-300"
                data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
@endsection
