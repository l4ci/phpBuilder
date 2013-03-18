<?php snippet('html_head'); ?>
<?php snippet('nav'); ?>

<h1>Sample of the l4box</h1>
<button class="toggleov" name="l4overlaay">Open l4box with overlay</button>
<button class="toggle" name="l4normal">Open l4box without overlay</button>
<button class="toggle" name="l4tabs">Open l4box with tabs</button>

<p>l4boxes are little or big popup windows. They can have a overlay. When clicked they add an anchor to the url - so when the page gets reloaded the popup is still visible.</p>

<div class="l4box" id="l4overlaay">	<a class="close">x</a>
    <div class="fulltext">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea eos doloremque quibusdam laudantium facere repellat reprehenderit numquam vero minus aut autem. Quasi non fugit cumque tenetur possimus eos impedit.</p>
    </div>
</div>

<div class="l4box" id="l4normal"> <a class="close">x</a>
    <div class="fulltext">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea eos doloremque quibusdam laudantium facere repellat reprehenderit numquam vero minus aut autem. Quasi non fugit cumque tenetur possimus eos impedit.</p>
    </div>
</div>

<div class="l4box" id="l4tabs">
    <div class="title">Title <span class="close">Close</span></div>
    <div class="tabbar">
        <ul>
            <li class="selected">First Tab</li>
            <li>Second Tab</li>
            <li>Third Tab</li>
            <li>Table View</li>
        </ul>
    </div>

    <div class="tab first">
        <div class="header">This is the first tab (with a div.header)</div>
        <div class="body text">
            <p>Body text in a div.body.text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea eos doloremque quibusdam laudantium facere repellat reprehenderit numquam vero minus aut autem. Quasi non fugit cumque tenetur possimus eos impedit.</p>
        </div>
    </div>

    <div class="tab">
        <div class="fulltext">This is the second tab. (in a div.fulltext.)</div>
    </div>

    <div class="tab">
        <p>This is the third tab.</p>
    </div>

    <div class="tab">
        <div class="header">
            <span class="s1">Spalte 1</span>
            <span class="s2">Spalte 2</span>
            <span class="s3">Spalte 3</span>
            <span class="s4">Spalte 4</span>
        </div>
        <div class="body">
            <div class="list-wrap">
                <ul>
            
                    <li>
                        <span class="s1">span.s1</span>
                        <span class="s2 link">span.s2.link</span>
                        <span class="s3">span.s3</span>
                        <span class="s4">span.s4</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php snippet('html_foot'); ?>