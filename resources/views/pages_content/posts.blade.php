
    
<div class="content__home--main">
    <div class="title_category">
        <a href="/" class="title_category--a">Trang chủ</a>
        <span>/</span>
        <a style="cursor: text" class="title_category--a">{{$listPosts->getCategory->content}}</a>     
        <span>/</span>
        <span>{{$listPosts->title}}</span>
    </div>    

    <div class="title_category--big">
        {{$listPosts->title}}
    </div>

    <div class="home--info-1">
        <span class="info-1-author">
            <i class="fa-regular fa-user"></i>
            <a href="" class="hover2">
                {{$listPosts->author}}
            </a>
        </span>
        <span class="info-1-time">
            <i class="fa-regular fa-clock"></i>
            <a href="" class="hover2">{{$listPosts->created_at}}</a>
        </span>
        <span class="info-1-cmt">
            <i class="fa-regular fa-comments"></i>
            <a href="" class="hover2">0 Bình Luận</a>
        </span>
    </div>

    <hr style="margin: 0">

    <div class="content_category">
        {{$listPosts->content}}
    </div>
</div> 



<style>
    .content__home--main {
        width: 806px;
        height: auto;
        padding: 0 auto;
    }
    .title_category{
        width: calc(100% - 40px);
        height: 50px;
        background-color: rgb(192 209 201 / 58%);
        font-size: 1.6rem;
        line-height: 50px;
        padding-left: 16px;
        margin-top : 14px;
        margin-left: 19px;
        color: rgb(70 54 54);
    }
     a.title_category--a{
        color: #00cd95;
    }

    .title_category--big{
        width: 766px;
        height: auto;
        /* background-color: rgb(192 209 201 / 58%); */
        font-size: 4.6rem;
        line-height: 50px;
        padding-left: 16px;
        margin : 14px 14px 0 0;
        color: rgb(70 54 54);
    }
    .home--info-1{
        margin: 10px 0 10px 19px;
    }
    .content_category{
        width: calc(100% - 40px);
        padding-top: 16px;
        font-size: 1.6rem;
        line-height: 30px;
        margin-left: 19px;
    }

</style>