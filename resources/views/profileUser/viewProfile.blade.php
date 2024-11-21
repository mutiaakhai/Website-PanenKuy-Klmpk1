<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PanenKuy Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        @vite('resources/css/register.css')
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>
    <body>
        <div class="relative flex size-full min-h-screen flex-col bg-[#f8f9fc] group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                <div class="px-40 flex flex-1 justify-center py-5">
                    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">About you</h2>
                        </div>
                        <div class="px-4 py-3 @container">
                            <div class="bg-white overflow-hidden shadow rounded-lg border">
                                <div class="px-4 py-5 sm:px-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        User Profile
                                    </h3>
                                    <td class=" h-[72px] px-4 py-2 w-60 text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em]">
                                        <a href="{{ route('editpro',$user->id) }}" class="cursor-pointer text-blue-600 dark:text-blue-500 hover:underline" >Edit</a>
                                        @csrf
                                    </td>
                                    <td class=" h-[72px] px-4 py-2 w-60 text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em]">
                                        <form action="{{ route('deleteUser',$user->id) }}" method="POST">
                                          @csrf
                                          <button class="cursor-pointer text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                        Here some information about you.
                                    </p>
                                </div>
                                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                    <dl class="sm:divide-y sm:divide-gray-200">
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $user->name }}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Bio</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $profile->bio ?? 'no bio press edit to add' }}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Email address</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $user->email }}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Address</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $profile->address ?? 'no address press edit to add' }}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $profile->phone ?? 'no phone press edit to add'}}
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>