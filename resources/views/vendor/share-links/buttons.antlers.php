<!-- component -->
<div class="rounded-md shadow-2xl mx-auto max-w-7xl text-center px-2 md:px-16 py-8 md:py-16 bg-white mb-10 mt-10">

    <h1 class="sm:mb-12 mb-16 md:text-4xl font-bold tracking-tight sm:mt-5 text-4xl sm:text-3xl lg:mt-6 xl:text-6xl">
        <span class="block"> Share this article on:</span>
    </h1>

    {{ if facebook }}
    <a href='{{ share_links:facebook }}' target="_blank"
       class="inline-flex items-center justify-center sm:mb-12 mb-1 md:w-40 w-full h-10 px-7 text-blue-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-700">
        <svg role="img" class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        <span>Facebook</span>
    </a>
    {{ /if }}

    {{ if twitter }}
    <a href='{{ share_links:twitter text="Read our latest news and article" handle="10gurusolutions" }}'
       target="_blank"
       class="inline-flex items-center justify-center sm:mb-12 mb-1 md:w-40 w-full h-10 px-7 text-blue-100 transition-colors duration-150 bg-[#1da1f2] rounded-lg focus:shadow-outline hover:bg-blue-500">
        <svg role="img" class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
        <span>Twitter</span>
    </a>
    {{ /if }}

    {{ if linkedin }}
    <a href='{{ share_links:linkedin }}'
       target="_blank"
       class="inline-flex items-center justify-center sm:mb-12 mb-1 md:w-40 w-full h-10 px-7 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
        <svg role="img" class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.994 24H24v-8.8c0-4.306-.926-7.623-5.952-7.623a5.212 5.212 0 0 0-4.7 2.587h-.07V7.976H8.512V24h4.963v-7.935c0-2.09.4-4.11 2.978-4.11 2.546 0 2.583 2.385 2.583 4.244v7.8h4.958ZM.436 7.977h4.965V24H.436V7.977ZM2.914 0a2.893 2.893 0 0 0-2.69 1.782A2.904 2.904 0 0 0 .848 4.95a2.894 2.894 0 0 0 4.943-2.069A2.876 2.876 0 0 0 2.913 0Z"/></svg>
        <span>Linkedin</span>
    </a>
    {{ /if }}

    {{ if whatsapp }}
    <a href='{{ share_links:whatsapp }}'
       data-action="share/whatsapp/share"
       target="_blank"
       class="inline-flex items-center justify-center sm:mb-12 mb-1 md:w-40 w-full h-10 px-7 text-indigo-100 duration-150 bg-green-500 rounded-lg focus:shadow-outline hover:bg-green-500">
        <svg role="img" class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" />
        </svg>
        <span>Whatsapp</span>
    </a>
    {{ /if }}
</div>

