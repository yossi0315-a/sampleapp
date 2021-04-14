<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="cateory" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filters One">Filters One</option>
                <option value="Filters Two">Filters Two</option>
                <option value="Filters Three">Filters Three</option>
                <option value="Filters Four">Filters Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl border-none placeholder-gray-900 bg-white px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-md bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-us uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <a href="#">
                    <img src="https://souce.unsplash.com/200×200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
                    <h4 class="text-xl font">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-20 h-7 py-2 px-3">Open</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <!--
                                <ul class="abusolute w-10 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-10">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-200 ease-in px-5 py-3"></a>Mark as Spam</li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"></a>Mark as Spam</li>
                                </ul>
                                -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
