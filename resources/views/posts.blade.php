<x-layout>
    <x-post-header/>
            

            <main class="max-w-6l max-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count() > 1)
                <x-post-grid :posts="$posts"/>

                        @else
                            <p class= "text-center">
                                No Posts yet .Please Check Back Later! 
                            </p>
                        @endif
        </main>
</x-layout>