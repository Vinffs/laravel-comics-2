<section id="footerList">
    <div class="container d-flex justify-content-between g-0">
        <div class="d-flex footerPadding">
            <div id="identifier">
                @foreach (array_slice(config('footerlist.list'), 0, 2) as $list)
                    <ul>
                        <li class="headerList">{{ $list['name'] }}</li>
                        @foreach ($list['list'] as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
            <div class="d-flex">
                @foreach (array_slice(config('footerlist.list'), 2) as $list)
                    <ul>
                        <li class="headerList">{{ $list['name'] }}</li>
                        @foreach ($list['list'] as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>

        </div>

        <div id="imgContainer">
        </div>
    </div>

</section>
