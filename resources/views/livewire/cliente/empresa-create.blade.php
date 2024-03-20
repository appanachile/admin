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
					 <div class="bg-green-500 text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 100%"></div>
				</div>
			</div>
		
			
			<div class="flex-1">
				<div class="w-10 h-10 bg-white mx-auto rounded-full text-lg text-white flex items-center ">
					<span class="text-gray-900 text-center w-full">2</span>
				</div>
			</div>
		
			<div class="w-1/6 align-center items-center align-middle content-center flex">
				<div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
					 <div class="bg-green-500 text-xs leading-none py-1 text-center text-grey-darkest rounded transition-all duration-500" style="width: 0%"></div>
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

		{!! Form::open(['route'=>'empresas.store', 'autocomplete'=>'off', 'files'=> true ]) !!}


		
		<div class="items-center mt-2">
			  {!! Form::text('name',null, ['class'=>'ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md','placeholder'=>'Nombre o razón social', 'autofocus'=>'on']) !!}

			  @error('name')
				 <span class="text-danger ml-2">{{$message}}</span>
				 
			  @enderror

		</div>
		
		   
		 	
		<div class="items-center mt-2">
			{!! Form::text('nick',null, ['class'=>'ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md','placeholder'=>'Nombre fantasia', 'autofocus'=>'on']) !!}

			@error('rick')
			   <span class="text-danger ml-2">{{$message}}</span>
			   
			@enderror

	  </div>
	  <div class="items-center mt-2">
		{!! Form::text('rut',null, ['class'=>'ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md','placeholder'=>'Rut', 'autofocus'=>'on']) !!}

		@error('rut')
		   <span class="text-danger ml-2">{{$message}}</span>
		   
		@enderror

		</div>
		<div class="items-center mt-2">
			{!! Form::text('giro',null, ['class'=>'ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md','placeholder'=>'Giro', 'autofocus'=>'on']) !!}
	
			@error('giro')
			   <span class="text-danger ml-2">{{$message}}</span>
			   
			@enderror
	
		</div>	  

		<div class="grid grid-cols-2 gap-x-2 mt-2">
			<div class="items-center">
				{!! Form::text('direccion1',null, ['class'=>'ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md','placeholder'=>'Direccion 1', 'autofocus'=>'on']) !!}
		
				@error('giro')
				   <span class="text-danger ml-2">{{$message}}</span>
				   
				@enderror
		
			</div>	  
			<div class="items-center">
				{!! Form::text('direccion2',null, ['class'=>'ml-2 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md','placeholder'=>'Direccion 2', 'autofocus'=>'on']) !!}
		
				@error('giro')
				   <span class="text-danger ml-2">{{$message}}</span>
				   
				@enderror
		
			</div>	  
		</div>
		 
	   
			{!! Form::submit('Siguiente', ['class'=>'w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3']) !!}
			{!! Form::close() !!}

	
		
	</div>

</div>