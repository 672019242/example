<x-app-layout title="Home Page">


    <div class="container">
        <div class="row">
            <div class="cl-md-6">
                @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                
                <div class="card">
                    <div class="card-header">
                        Welcome to my site
                    </div>
                    <div class="card-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatibus quas sint magnam, harum eaque omnis voluptatum esse officiis iure incidunt corrupti dolor similique accusamus ratione, pariatur blanditiis, dicta voluptates.</p>
                        <p>Vero blanditiis doloribus quibusdam quaerat. Eaque eum quod architecto deleniti, ad numquam cupiditate libero natus hic quidem culpa asperiores ea voluptatem amet? Ducimus, exercitationem. Nostrum ipsa ut cum id officiis!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>