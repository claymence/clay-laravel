<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('James Webb Space Telescope') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <img src="https://jwst-api-cdn.nyc3.cdn.digitaloceanspaces.com/jwst--jw02731002005_02107_00005_mirimage_o002_crf.jpg" alt="JWST Image">
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-6">
                    <h4 class="font-semibold p-2">
                        JwstApiTest
                    </h4>
                    <hr class="my-3">
                    <livewire:jwst.jwst-api-test />
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap gap-4 text-center">
        <div class="mt-12 mb-6 px-8 w-full">
            The displayed data is provided via API by 
            <a href="https://jwstapi.com/" target="_blank" class="text-blue-500 hover:underline">
                jwstapi.com
            </a>
            and sourced from
            <a href="https://outerspace.stsci.edu/display/MASTDATA/JWST+AWS+Bulk+Download+Scripts" target="_blank" class="text-blue-500 hover:underline">
                MAST.
            </a><br>
            This work uses observations made with the NASA/ESA/CSA 
            <a href="https://www.esa.int/Science_Exploration/Space_Science/Webb" target="_blank" class="text-blue-500 hover:underline">
                James Webb Space Telescope.
            </a><br>
            The data were obtained from the 
            <a href="https://archive.stsci.edu/publishing/mission-acknowledgements" target="_blank" class="text-blue-500 hover:underline">
                Mikulski Archive for Space Telescopes
            </a>
            at the Space Telescope Science Institute,<br>
            which is operated by the Association of Universities for Research in Astronomy, Inc., under NASA contract NAS 5-03127 for JWST.
        </div>
    </div>

</x-app-layout>