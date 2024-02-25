<div>
   <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ route('user.search') }}">
                            @csrf
                            <input type="text" name="search_key"  placeholder="What do you need?">
                            <button type="submit" class="btn btn-dark">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0171212121</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
</div>
