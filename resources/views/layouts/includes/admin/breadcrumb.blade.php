{{--Verificar si hay un elemento de breadcrumb--}}
@if(isset($breadcrumbs) && count($breadcrumbs))

{{-- margin bottom y display block --}}
    <nav class="mb-2 block">
        <ol class="flex flex-wrap text-slate-700 text-sm">

            @foreach ($breadcrumbs as $item)
                <li class="flex items-center">
                    {{-- SI NO es el primer elemento, ponle separador antes --}}
                    @unless ($loop->first)
                        <span class="px-2 text-gray-400">/</span> 
                    @endunless

                    {{-- Revise si tiene un href --}}
                    @isset($item['href'])
                        <a href="{{ $item['href'] }}" class="opacity-60 hover:opacity-100 transition">
                            {{ $item['name'] }}
                        </a>
                    @else
                        {{ $item['name'] }}
                    @endisset
                </li>
            @endforeach
        </ol>

        {{-- El último elemento en negritas --}}
        @if(count($breadcrumbs) > 1)
            <h6 class="font-bold mt-2">
                {{ end($breadcrumbs)['name'] }}
            </h6>
        @endif
    </nav>
@endif