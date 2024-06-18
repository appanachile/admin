<x-app-layout>
    <div class="min-h-screen bg-gray-50/50" x-data="{ aside: false }">

        @livewire('menu-aside')
        
        <div class="p-4 xl:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
            <div class="capitalize">
                <nav aria-label="breadcrumb" class="w-max">
                <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                    <li class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                    <a href="{{Route('dashboard')}}">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">dashboard</p>
                    </a>
                    <span class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                    </li>
                    <li class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">home</p>
                    </li>
                </ol>
                </nav>
                <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">home</h6>
            </div>
            <div class="flex items-center">
                <div class="mr-auto md:mr-4 md:w-56">
                <div class="relative w-full min-w-[200px] h-10">
                    <input class="peer w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500" placeholder=" ">
                    <label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Type here</label>
                </div>
                </div>
                <button x-on:click="aside=!aside" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden" type="button">
                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                </button>
                <a href="#">
                <button class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 hidden items-center gap-1 px-4 xl:flex" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                    </svg>Sign In </button>
                <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden" type="button">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                    </svg>
                    </span>
                </button>
                </a>
                <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                    <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                </button>
                <button aria-expanded="false" aria-haspopup="menu" id=":r2:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                    <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                </button>
            </div>
            </div>
        </nav>
        <div class="mt-12">
           
            
            <main class="pr-10">
                <div class="grid grid-cols-2 md:grid-cols-3 w-full gap-x-2 m-6">
                                    
                    <div class="mx-auto w-full bg-white col-span-2 py-4 px-6">
                    @if (session('sku'))
                        <div x-show="alert" class="font-regular relative block w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white mb-4" data-dismissible="alert">
                            <div class="absolute top-4 left-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                class="mt-px h-6 w-6"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"
                                ></path>
                            </svg>
                            </div>
                            <div class="ml-8 mr-12">
                            <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Producto no encontrado en la base de datos
                            </h5>
                            
                            </div>
                            <div data-dismissible-target="alert" x-on:click="alert=false"
                            data-ripple-dark="true"
                            class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20" >
                            <div role="button" class="w-max rounded-lg p-1">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                                </svg>
                            </div>
                            </div>
                        </div>
                    @endif
                    <h1 class="font-bold text-2xl mb-4">Crear Nuevo Producto</h1>

                        {!! Form::open(['route'=>'productos.store', 'autocomplete'=>'off', 'files'=> true ]) !!}

                        {!! Form::hidden('creacion', 1 ) !!}
                       
                            <div class="flex items-center">
                            {!! Form::label('name','Nombre') !!}
                            {!! Form::text('name',null, ['class'=>'ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md','placeholder'=>'Ingrese el nombre del producto', 'autofocus'=>'on']) !!}

                            @error('name')
                                <span class="text-danger ml-2">{{$message}}</span>
                                
                            @enderror

                        </div>
                        <div class="my-4 flex items-center">
                            {!! Form::label('familia_id', 'Familia:') !!}
                            {!! Form::select('familia_id', $familias, null, ['class'=>'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md ml-2', 'id' => 'familia-select']) !!}
                        </div>
                        
                        <div class="my-4 flex items-center">
                            {!! Form::label('categoria_id', 'Categoria:') !!}
                            {!! Form::select('categoria_id',$category_products2, null, ['class'=>'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md ml-2', 'id' => 'category-product-select']) !!}
                        </div>
                        
                            
                            <div class="mb-4">
                            {!! Form::label('descripcion', 'Descripción') !!}
                            {!! Form::textarea('descripcion', null , ['class' => 'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mt-1']) !!}
                            
                            @error('descripcion')
                                <strong class="text-xs text-red-600">{{$message}}</strong>
                            @enderror
                        </div>
            
                            <div class="mb-6" >
                            <div class="flex justify-between">
                                <label class=" block text-xl font-semibold text-[#07074D]">
                                Foto del producto
                                </label>
                                            
                            </div>

                            {!! Form::file('file', ['class'=>'form-input w-full mt-6'.($errors->has('file')?' border-red-600':''), 'id'=>'file','accept'=>'image/*']) !!}
                                                
                            

                            
                            </div>
                            
            
                            
                            
                        
            
                        
                            
                            

                    </div>
                    <div class="mx-auto w-full bg-white col-span-2 md:col-span-1 py-4 px-6 mr-6">
                        
                        <div class="mb-5">
                            
                            <div class="mb-4">
                            {!! Form::label('precio', 'Precio:') !!}
                            {!! Form::number('precio', null , ['class' => 'form-input block w-full mt-1'.($errors->has('precio')?' border-red-600':''),'step' => '0.5']) !!}

                            @error('precio')
                                <strong class="text-xs text-red-600">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-4">
                            {!! Form::label('costo', 'Costo:') !!}
                            {!! Form::number('costo', null , ['class' => 'form-input block w-full mt-1'.($errors->has('costo')?' border-red-600':''),'step' => '0.5']) !!}

                            @error('costo')
                                <strong class="text-xs text-red-600">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-4">
                            {!! Form::label('stock', 'Stock:') !!}
                            {!! Form::number('stock', null , ['class' => 'form-input block w-full mt-1'.($errors->has('stock')?' border-red-600':''),'step' => '0.5']) !!}

                            @error('stock')
                                <strong class="text-xs text-red-600">{{$message}}</strong>
                            @enderror
                        </div>
                        </div>
                        

                     

                        
                        
                        <div class="mb-4">
                        {!! Form::label('personalizable', 'Personalizable') !!}
                        <div class="flex items-center mt-1">
                            <label class="inline-flex items-center mr-4">
                                {!! Form::radio('personalizable', 'si', true, ['class'=>'form-radio']) !!}
                                <span class="ml-2">Sí</span>
                            </label>
                            <label class="inline-flex items-center">
                                {!! Form::radio('personalizable', 'no', true, ['class'=>'form-radio']) !!}
                                <span class="ml-2">No</span>
                            </label>
                        </div>
                        </div>
                
                        <div class="mb-4">
                        {!! Form::label('sku', 'Sku: (Opcional)') !!}
                        @if (session('sku'))
                            {!! Form::number('sku', session('sku') , ['class' => 'form-input block w-full mt-1'.($errors->has('comision_invitado')?' border-red-600':''),'step' => '0.5']) !!}
                        @else
                            {!! Form::number('sku', null , ['class' => 'form-input block w-full mt-1'.($errors->has('comision_invitado')?' border-red-600':''),'step' => '0.5']) !!}
                        @endif
                        
                        @error('sku')
                            <strong class="text-xs text-red-600">{{$message}}</strong>
                        @enderror
                    </div>
                    
                    
                        <div class="mb-24">
                            {!! Form::submit('Crear Producto', ['class'=>'hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none']) !!}
                            {!! Form::close() !!}
                        </div>
                        </form>
                    </div>
                </div>
            </main>

            <x-slot name="js">
                <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
                <script>
                
                        ClassicEditor
                        .create(document.querySelector('#descripcion'), {
                        toolbar: {
                        items: [
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'underline',
                            'strikethrough',
                            'link',
                            '|',
                            'bulletedList',
                            'numberedList',
                            'todoList',
                            '|',
                            'outdent',
                            'indent',
                            '|',
                            'alignment',
                            'fontBackgroundColor',
                            'fontColor',
                            'fontSize',
                            'fontFamily',
                            '|',
                            'highlight',
                            'subscript',
                            'superscript',
                            'removeFormat',
                            'code',
                            'codeBlock',
                            '|',
                            'imageInsert',
                            'blockQuote',
                            'insertTable',
                            'mediaEmbed',
                            'pageBreak',
                            '|',
                            'undo',
                            'redo',
                            '|',
                            'horizontalLine',
                            'htmlEmbed',
                            'MathType',
                            '|',
                            'exportPdf',
                            'exportWord',
                            'exportHtml',
                            '|',
                            'find',
                            'selectAll',
                            'sourceEditing',
                            '|',
                            'undo',
                            'redo'
                        ],
                        shouldNotGroupWhenFull: true
                        },
                        language: 'es',
                        image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:full',
                            'imageStyle:side',
                            '|',
                            'imageResize',
                            'imageResize:50',
                            'imageResize:75',
                            '|',
                            'imageTextAlternative'
                        ]
                        },
                        table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells',
                            'tableProperties',
                            'tableCellProperties'
                        ]
                        },
                        licenseKey: '',
                        })
                        .catch(error => {
                        console.error(error);
                        });
                </script>
            </x-slot>
            
        </div>
        
        <div class="text-blue-gray-600">
            <footer class="py-2">
                <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2023, made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="-mt-0.5 inline-block h-3.5 w-3.5">
                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path>
                    </svg> by <a href="https://www.creative-tim.com" target="_blank" class="transition-colors hover:text-blue-500">Creative Tim</a> for a better web. </p>
                    <ul class="flex items-center gap-4">
                    <li>
                        <a href="https://www.creative-tim.com" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Creative Tim</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/presentation" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">About Us</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/blog" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Blog</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">License</a>
                    </li>
                    </ul>
                </div>
            </footer>
        </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const familiaSelect = document.getElementById('familia-select');
            const categoryProductSelect = document.getElementById('category-product-select');
            const categoryProducts = @json($category_products);
    
            familiaSelect.addEventListener('change', function () {
                const selectedFamiliaId = this.value;
    
                // Filtrar category_products basados en la familia seleccionada
                const filteredCategoryProducts = categoryProducts.filter(product => product.familia_id == selectedFamiliaId);
    
                // Limpiar el select de category_products
                categoryProductSelect.innerHTML = '';
    
                // Agregar las opciones filtradas al select de category_products
                filteredCategoryProducts.forEach(product => {
                    const option = document.createElement('option');
                    option.value = product.id;
                    option.text = product.name;
                    categoryProductSelect.appendChild(option);
                });
            });
        });
    </script>


</x-app-layout>

