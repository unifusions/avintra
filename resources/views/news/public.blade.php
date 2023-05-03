<x-guest-layout>
     <div class="container mb-3">
          @foreach ($news as $n)
               <div class="col-4">
                    {{ $n->news_title }}

                    {!! $n->news_content !!}
               </div>
            
          @endforeach
     </div>
</x-guest-layout>