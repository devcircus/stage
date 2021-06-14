<div x-data="notification()"
    x-init="init()"
    x-on:notify.window="setNotificationDetailsFromEvent($event)"
    x-show="show"
    x-cloak
    x-description="Notification panel, show/hide based on alert state."
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    class="fixed z-50 w-full max-w-sm bg-white rounded-lg shadow-lg pointer-events-auto top-90 right-30">
    <div class="overflow-hidden rounded-lg shadow-xs">
        <div class="p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg x-show="type === 'success'" x-cloak class="w-6 h-6 text-green-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <svg x-show="type === 'error'" x-cloak class="w-6 h-6 text-red-600" stroke="currentColor"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>
                    </svg>
                    <svg x-show="type === 'info'" x-cloak class="w-6 h-6 text-blue-400" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd">
                        </path>
                    </svg>
                </div>
                <div class="ml-3 w-0 flex-1 pt-0.5">
                    <p class="text-sm font-medium leading-5 text-gray-900" x-text="message"></p>
                    <p x-show="description" x-cloak class="mt-1 text-sm leading-5 text-gray-500" x-text="description">
                    </p>
                </div>
                <div class="flex flex-shrink-0 ml-4">
                    <button x-on:click="hideNotification()"
                        class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function notification() {
                return {
                    fromSession: false,
                    show: false,
                    type: 'info',
                    message: '',
                    description: '',
                    time: 3500,
                    init() {
                        this.fromSession = '{{ session()->has('notify.message') }}';
                        if(this.fromSession) {
                            this.type = '{{ session()->get('notify.type') ?? 'info' }}';
                            this.message = '{{ session()->get('notify.title') ?? 'Notice' }}';
                            this.description = '{{ session()->get('notify.message') ?? 'Information' }}';
                            this.time = '2500';
                            this.show = true;
                            setTimeout(() => this.show = false, this.time);
                        }
                    },
                    hideNotification() {
                        this.show = false;
                    },
                    setNotificationDetailsFromEvent(event) {
                        this.type = event.detail[0];
                        this.message = event.detail[1];
                        this.description = event.detail[2];
                        this.time = event.detail[3];
                        this.show = true;
                        setTimeout(() => this.show = false, this.time);
                    },
                }
            }
        </script>
    @endpush
</div>
