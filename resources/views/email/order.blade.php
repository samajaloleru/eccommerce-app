
@component('mail::message')
<header class="pv4">
    <h1 class="f5 fw6 mid-gray">Hello</h1>
    <h2 class="f6 gray fw2 ttu tracked">Order received from foodthings City Center.</h2>
    <h2 class="f6 gray fw2 ttu tracked">We will get back to you through your phone number.</h2>
    <h2 class="f6 gray fw2 ttu tracked">Thank you</h2>
</header>
<div class="pa4">
    <div class="overflow-auto">
        <table class="f6 w-100 mw8 center" cellspacing="0">
            <thead>
                <tr>
                    <th class="fw6 bb b--black-20 tl pb3 pr3 bg-white">Item Name</th>
                    <th class="fw6 bb b--black-20 tl pb3 pr3 bg-white">Price</th>
                    <th class="fw6 bb b--black-20 tl pb3 pr3 bg-white">Quantity</th>
                </tr>
            </thead>
            <?php
                $contents=Cart::content();
                
            ?>
            <tbody class="lh-copy">
                <?php foreach($contents as $v_contents){?>
                    <tr>
                        <td class="pv3 pr3 bb b--black-20">{!! $v_contents->name !!}</td>
                        <td class="pv3 pr3 bb b--black-20">{!! $v_contents->price !!}</td>
                        <td class="pv3 pr3 bb b--black-20">{!! $v_contents->qty !!}</td>
                    </tr>
                <?php }?>
                <tr>
                    <td class="pv3 pr3 f5 fw6 bb b--black-20">Total</td>
                    <td class="pv3 pr3 bb b--black-20"></td>
                    <td class="pv3 pr3 f5 fw6 bb b--black-20">{!! Cart::total() !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endcomponent
