

@csrf

<div>
    <label for="">Title</label>
    <div>
        <input 
            class="input bg-transparent" 
            type="text" 
            name="title" 
            value={{$snippet->title}}>
    </div>
</div>

<div>
    <label for="">Description</label>
    <div>
        <textarea type="text" name="description">{{$snippet->description}}</textarea>
    </div>
</div>

<div>
    <div>
        <button class="button is-button" type="submit">{{$buttonText}}</button>
        <a href="{{$snippet->path()}}">Cancel</a>
    </div>
</div>











<div class="bg-gray-100 font-sans w-full min-h-screen m-0">
	<div class="bg-white shadow">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between py-4">

        <div class="hidden sm:flex sm:items-center">
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Products</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Marketplace</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Partners</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600">Pricing</a>
        </div>

        <div class="hidden sm:flex sm:items-center">
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>
          <a href="#" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
        </div>

        <div class="sm:hidden cursor-pointer">
        </div>
      </div>
      
      <div class="block sm:hidden bg-white border-t-2 py-2">
        <div class="flex flex-col">
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Products</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Marketplace</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Partners</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Pricing</a>
          <div class="flex justify-between items-center border-t-2 pt-2">
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>
            <a href="#" class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>