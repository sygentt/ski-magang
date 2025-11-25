<div class="flex justify-center items-center min-h-svh relative overflow-hidden">
    <div class="absolute inset-0 gradient-mesh"></div>
    <div class="absolute top-20 left-20 w-72 h-72 bg-purple-300/30 dark:bg-purple-600/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-300/30 dark:bg-blue-600/20 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>

    <div
        class="relative glass-card flex h-full gap-6 lg:w-2/3 lg:max-w-4xl mx-auto overflow-hidden p-2 z-10">
        <x-auth-lottie/>
        <div class="lg:max-w-md flex sm:min-w-sm lg:min-w-0 w-full flex-col gap-4 justify-center p-8 md:p-10">
            <h1 class="text-center font-semibold text-3xl bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Create your account</h1>
            <div>
                <x-auth-session-status class="text-center" :status="session('status')"/>
                <form wire:submit="register" class="flex flex-col gap-6">
                    <flux:input
                        wire:model="name"
                        :label="__('Name')"
                        type="text"
                        autofocus
                        autocomplete="name"
                        :placeholder="__('Full name')"
                    />

                    <flux:input
                        wire:model="email"
                        :label="__('Email address')"
                        type="email"
                        autocomplete="email"
                        placeholder="email@example.com"
                    />

                    <flux:input
                        wire:model="password"
                        :label="__('Password')"
                        type="password"
                        autocomplete="new-password"
                        :placeholder="__('Password')"
                        viewable
                    />

                    <flux:input
                        wire:model="password_confirmation"
                        :label="__('Confirm password')"
                        type="password"
                        autocomplete="new-password"
                        :placeholder="__('Confirm password')"
                        viewable
                    />

                    <div class="flex items-center justify-end">
                        <flux:button type="submit" variant="primary"
                                     class="w-full glass-button-primary !rounded-xl transition-all duration-200 hover:scale-105">
                            {{ __('Create account') }}
                        </flux:button>
                    </div>
                </form>

                <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    <span>{{ __('Already have an account?') }}</span>
                    <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
                </div>
            </div>
        </div>
    </div>
</div>
