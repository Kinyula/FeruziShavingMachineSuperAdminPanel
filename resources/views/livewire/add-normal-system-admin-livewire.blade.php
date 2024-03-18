<div>
    <div class="card-box mb-30 p-3">
        <h2 class="h4 pd-20 text-gray-600"><i class="bi bi-plus"></i> Add normal system admin</h2>

        @if (session()->has('addAnAdmin'))
            <div role="alert" class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('addAnAdmin') }}</strong>
                <button class="btn btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form wire:submit.prevent = "addAdmin">


            <div class="mt-4">
                <input type="hidden"  wire:model = 'role_id' >
            </div>

            <div class="mt-4">
                <label for="name" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>
                    Name</label>
                <input type="text" wire:model= "name"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Enter admin's name">
                @error('name')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror

            </div>

            <div class="mt-4">
                <label for="email" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>
                    Email</label>
                <input type="text" wire:model= "email"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Enter admin's email">
                @error('email')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="mt-4">
                <label for="password" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>
                    Password</label>
                <input type="password" wire:model= "password"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Enter admin's password">
                @error('password')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>
                    Confirm password</label>
                <input type="password" wire:model= "password_confirmation"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Confirm admin's password">
                @error('password_confirmation')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="mt-4">
                <label for="profile_image" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>Profile
                    Image</label>
                <input type="file" wire:model= "profile_image"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'>
                @error('profile_image')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div>
                <br>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ms-4"
                    onclick="confirm(`Don't forget to add the product's price or else uncertainity may occur`) || event.StopImmediatePropagation()">
                    register admin
                </button>
            </div>
        </form>
    </div>
</div>
