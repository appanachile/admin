<div class="max-w-xl mx-auto my-4 border-b-2 pb-4">	
	

	
	<div class="form bg-white p-6 my-10 relative">
	
		<div class="flex pb-3">
			<div class="flex-1">
			</div>
	
			<div class="flex-1">
				<div class="w-10 h-10 bg-green-600 mx-auto rounded-full text-lg text-white flex items-center">
					<span class="text-white text-center w-full"><i class="fa fa-check w-full fill-current white"></i></span>
				</div>
			</div>
	
			<div class="w-1/6 align-center items-center align-middle content-center flex">
				<div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
					 <div class="bg-green-500 text-xs leading-none py-1 text-center text-grey-darkest rounded transition-all duration-500" style="width: 100%"></div>
				</div>
			</div>
			
		
			
			<div class="flex-1">
				<div class="w-10 h-10 @if($porc1==100)bg-green-600 @else bg-white @endif  border-2 border-grey-light mx-auto rounded-full text-lg text-white flex items-center">
					@if($porc1==100)
					<span class="text-white text-center w-full"><i class="fa fa-check w-full fill-current white"></i></span>
					@else 
						<span class="text-gray-900 text-center w-full">2</span>
					@endif
					
				</div>
			</div>

			<div class="w-1/6 align-center items-center align-middle content-center flex">
				<div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
					 <div class="bg-green-500 text-xs leading-none py-1 text-center text-grey-darkest rounded transition-all duration-500" style="width: {{$porc1}}%"></div>
				</div>
			</div>
		
			
		
			<div class="flex-1">
				<div class="w-10 h-10 bg-white border-2 border-grey-light mx-auto rounded-full text-lg text-white flex items-center">
					<span class="text-gray-900 text-center w-full">3</span>
				</div>
			</div>
		
		
		
	
					
		</div>
		
		<div class="flex justify-between text-xs content-center text-center mb-12 mx-20">
			<div class="w-1/4">
				Mis datos
			</div>
			
			<div class="w-1/4">
				Mi negocio
			</div>
			
			<div class="w-1/4">
				Servicios
			</div>
			
			
		</div>

		<div class="hidden icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>

		<h3 class="text-2xl text-gray-900 font-semibold">Mi negocio</h3>
		<p class="text-gray-600"> Cuentanos sobre tu negocio</p>
		@if($porc1==100)
			
			<h3 class="text-xl mt-8 text-gray-900 font-semibold text-center">TABLA DE SERVICIOS</h3>
		
		@else 
				
			<form wire:submit.prevent="store" class="form bg-white p-6 my-10 relative" autocomplete="off" enctype="multipart/form-data">
				
				<div class="items-center mt-2">
					<input type="text" wire:model="name" class="ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Nombre o razón social" autofocus>
					@error('name') <span class="text-danger ml-2">{{ $message }}</span> @enderror
				</div>
		
				<!-- Repite lo mismo para los otros campos -->
				<div class="items-center mt-2">
					<input type="text" wire:model="nick" class="ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Nombre fantasia" autofocus>
					@error('nick') <span class="text-danger ml-2">{{ $message }}</span> @enderror
				</div>
		
				<div class="items-center mt-2">
					<input type="text" wire:model="rut" class="ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Rut" autofocus>
					@error('rut') <span class="text-danger ml-2">{{ $message }}</span> @enderror
				</div>
		
				<div class="items-center mt-2">
					<input type="text" wire:model="giro" class="ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Giro" autofocus>
					@error('giro') <span class="text-danger ml-2">{{ $message }}</span> @enderror
				</div>
		
				<div class="grid grid-cols-2 gap-x-2 mt-2">
					<div class="items-center">
						<input type="text" wire:model="direccion1" class="ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Direccion 1" autofocus>
						@error('direccion1') <span class="text-danger ml-2">{{ $message }}</span> @enderror
					</div>
					<div class="items-center">
						<input type="text" wire:model="direccion2" class="ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Direccion 2" autofocus>
						@error('direccion2') <span class="text-danger ml-2">{{ $message }}</span> @enderror
					</div>
				</div>
		
				<button type="submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">Siguiente</button>
			</form>

		@endif
	
		
	</div>

</div>