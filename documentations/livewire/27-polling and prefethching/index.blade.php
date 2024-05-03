<div>
    Index Post Component
    <hr>
    ################################################
    NOTE: both of this titles are for espetial times.
    tip1=it refresh component every 2 sceccod by default.
    tip2= it refersh componnent every two second and it will call foo() method.
    ################################################
    //-----------polling---------
    <div wire:poll>//----tip1-------
        Current time: {{ now() }}
    </div>
      {{-- <div wire:poll.750ms>//--------------note:every 750ms-----------
        Current time: {{ now() }}
    </div>
    <div wire:poll="foo">//---------tip2--------
        Current time: {{ now() }}
    </div> --}}
    //------endpolling----------

    //-----prefetching----------
    ################################################
    tip1=on hover request will be sent to method and after click it just show the content.
    we should not use prefetching when we want to add to database or seestion.
    ################################################

    <button wire:click.prefetch="toggleContent">Show Content</button>//------tip1------

    @if ($contentIsVisible)//--------npte----------
        <span>Some Content...</span>
    @endif

</div>
