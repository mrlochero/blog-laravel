   <div class="content__home--main">
        <div class="main--home">
            <ul class="">
                @foreach ($listPosts as $key => $item)
                <li class="main--home-post">
                    <a href="{{ route('post.show', ['id' => $item->id]) }}" class="home-post--item">
                        <img src="{{'/assets/clients/img/'.$item->img.'.jpg'}}" alt="" class="home-post--img">
                        <div class="post--home--info">
                            <h2><a href="{{ route('post.show', ['id' => $item->id]) }}" class="home--info-title hover2">{{$item->title}}</a></h2>
                            <div class="home--info-1">
                                <span class="info-1-author">
                                    <i class="fa-regular fa-user"></i>
                                    <a href="" class="hover2">{{$item->author}}</a>
                                </span>
                                <span class="info-1-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <a href="" class="hover2">{{$item->created_at}}</a>
                                </span>
                                <span class="info-1-cmt">
                                    <i class="fa-regular fa-comments"></i>
                                    {{-- <a href="" class="hover2">{{$item->cmt}} Bình Luận</a> --}}
                                </span>
                                
                            </div>
                            <p class="home--info-2">{{$item->content}}</p>
                        </div>    
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="home-pagenation">{{$listPosts->links()}} </div>
   </div>
