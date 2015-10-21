<!doctype html>
<html lang="et">
<head>
    <base href="baas/" >
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        thead {color:peru;}
        tbody {color:peru;}
        tfoot {color:plum;}
        body {
            background-image: url(http://thumbs.dreamstime.com/x/seamlessly-repeat-old-brick-wall-repeatable-both-7673116.jpg);
            background-repeat: repeat;

        }

        div {
            width: 500px;
            min-height: 300px;
            border: 1px solid black;
            margin: 20px auto;
            background-color: white;
        }

        div div {
            width: 300px;
            min-height: 100px;
            border: 1px solid black;
            margin: 5px auto;
        }

        div h1, h2, h3 {
            color: red;
        }

        div h4, h5, h6 {
            color: mediumvioletred;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<!--Hakkab pihta-->
<header style="background-color:orangered">
    <h1>Lorem ipsum dolor.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
</header>
<nav style="background-color: mediumvioletred;margin:auto">
    <center><a href="/html/">Lorem ipsum.</a> |
    <a href="/css/">Lorem ipsum.</a> |
    <a href="/js/">Lorem ipsum.</a> |
    <a href="/jquery/">Lorem ipsum.</a></center>
</nav>
<div id="main">
    <h1>Heading1</h1>

    <div id="inner">
        <article><h2>Heading2</h2>
        <span><a href="">Lorem ipsum.</a><abbr title="Lorem ipsum.">LI</abbr></span>
            <address>
                Aadress:<br>
                Lorem ipsum. <br>
                Lorem ipsum dolor. <br>
                Lorem ipsum dolor sit <br>
            </address>
        </article>

        <pre>
            Lorem ips                 um dolo
            r sit amet, consect    etur adipis
            icing eli         t. Commodi incidunt maxim
            e ullam. Repellat?
        </pre>
    </div>

    <div id="inner">
        <h3>Heading3</h3>
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/PCS_pool_cover.jpg" width="100" height="100" alt="no" usemap="#pool">
        <map name="pool">
            <area shape="rect" coords="0,0,46,100" href="http://i.livescience.com/images/i/000/061/056/original/great-white.jpg?1389213661" alt="shark">
            <area shape="rect" coords="47,0,100,100" href="https://upload.wikimedia.org/wikipedia/commons/b/b3/Dolphind.jpg" alt="dolph">
        </map>
        <video width="300"  controls>
            <source src="Jackass - the fish hook steve.mp4" type="video/mp4">
            <track>
        </video>

        
    </div>

    <div id="inner">
        <h4>Heading4</h4>
        <img src="nyan_cat_again_by_mirandamaija-d4zlpcs.png" width="300" alt="ddd">
        <audio src="njan.mp4" controls><param name="autoplay" value="true"></audio>
        <span><aside>Lorem ipsum dolor sit amet,</aside></span>
        <span>Lorem <s>ipsum dolor s</s>it amet,</span>
        <span>Lorem<q> ipsum<u> dol</u>or si</q>t amet,</span>
        <span>Lorem ipsum dolor sit amet,</span>
        <ruby>
            ? <rt><rp>(</rp>???<rp>)</rp></rt>
        </ruby>
    </div>

    <div id="inner">
        <progress value="67" max="100"></progress>
        <main>
           <h5>Heading5</h5>
            <span>Lorem ipsum <bdi>dolor</bdi> sit amet,</span><br>
            <span>Lorem ipsum <bdi>dolor</bdi> sit amet,</span><br>
            <span>Lorem ipsum <bdi>dolor</bdi> sit amet,</span><br>
            <span><bdo dir="rtl">Lorem ipsum dolor sit amet</bdo>,</span><br>
            <span><bdo dir="rtl">Lorem<mark>ipsum dolor</mark> sit amet,</bdo></span><br>
        </main>
    </div>

    <div id="inner">
        <h6>Heading6</h6>
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse possimus qui repudiandae? <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo?</blockquote>
        <span><cite>Lorem </cite>ipsum dolor sit amet,</span>
        <span><code>Lorem ipsu <wbr> m dolor sit amet</code>,</span>
        <span>Lorem ipsum dolor sit amet,</span><br>
        <button type="button" onclick="alert('2ppi niu jeer!!')">Tadaa!</button>
    </div>
</div>
<br>

<div id="main2">
    <div id="inner2">
        <canvas id="canvas">sdfhdsgasdf VIGA ERROR HAHAHAH</canvas>
        <embed src="car.swf">
    </div>
    <div id="inner2">
<table>
    <thead></thead>
    <tbody></tbody>
    <tfoot></tfoot>
</table>
        <table>

            <caption>caption</caption>
            <colgroup>
                <col span="2" style="background-color:greenyellow">
                <col style="background-color:lightgoldenrodyellow">
            </colgroup>

            <tr>

                <th>Lorem ipsum dolor.</th>
                <th>Lorem ipsum dolor.</th>
                <th>Lorem ipsum dolor.</th>
            </tr>
            <tr>
                <td>Lorem <b>ipsum d</b>olor.</td>
                <td>Lorem ipsum dolor.</td>
                <td>Lorem ipsum dolor.</td>
            </tr>
             </tr>
            <tr>
                <td>Lorem ipsum dolor.</td>
                <td>Lorem ipsum dolor.</td>
                <td>Lor<small>em ipsum do</small>lor.</td>
            </tr>

        </table>
    </div>
</div>
<div id="main3">
    <div>
        <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
            <input type="range" id="a" value="50">100
            +<input type="number" id="b" value="50">
            =<output name="x" for="a b"></output>
        </form>
        <textarea rows="4" cols="30">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
        </textarea>
        <span><time datetime="2008-02-14 20:00"></span>
    </div>
    <div id="inner3">
        <dl>
            <dt>lorem</dt>
            <dd>Lorem ipsum.</dd>
            <dt>lorem</dt>
            <dd>Lorem ipsum.</dd>
        </dl><br>
        <span>Lorem <del>ipsum</del> dolor <ins>sit</ins> amet.</span>
        <input list="brew">

        <datalist id="brew">
            <option value="saku">
            <option value="l2hte">
            <option value="vesi">
            <option value="loom">
            <option value="aju">
        </datalist>
        <span>Lorem <dfn>ipsum</dfn> <dialog >dolor</dialog>.</span>
        <span>Lorem <em>ddddd</em> dolor sit <em>amet</em>, consectetur.</span>
        <span>
            <form>
                <fieldset>
                    <legend>Lorem ipsum.:</legend>
                    lorem: <input id="das" type="text"><br>
                    <label for="das">mhm</label>
                    lorem: <input type="text"><br>
                    lorem: <input type="text">
                </fieldset>
                bla:<keygen name="dsa">
            </form>
        </span>
    </div>
    <div id="inner3">
        <span>Nyancats' rainbow left: <meter value="0.6"></meter></span>
        <figure>
            <img src="nyan_cat_again_by_mirandamaija-d4zlpcs.png" width="200" alt="cass" >
            <figcaption>Lorem <i>ipsum d</i>olor sit..</figcaption>
        </figure>
    </div>
    <div>
        <strong>Lorem.</strong><br>
        <code>Lorem ipsum.</code><br>
        <samp>Lorem ipsum dolor.</samp><br>
        <kbd>Lorem ipsum.</kbd><br>
        <var>Lorem.</var>
    </div>
    <div>
        <section>
           <span>Lorem ipsum dolor sit.</span>
            <p>Lorem ipsum.</p>
        </section>
        <ol>
            <li>Lore<sub>m ipsum dol</sub>or.</li>
            <li>Lo<sup>rem ipsum do</sup>lor.</li>
            <li>Lorem ipsum dolor.</li>
        </ol>

        <ul>
            <li>Lorem ipsum dolor.</li>
            <li>Lorem ipsum dolor.</li>
            <li>Lorem ipsum dolor.</li>
        </ul>
    </div>
    <div>
        <details>
            <summary>loooorem</summary>
            <span>Lorem ipsum dolor sit.</span>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
        </details>
        <script>
            document.write("lorem")
        </script>
        <noscript>dasfghfdsadfghfdasf</noscript>
        <object width="300" height="200" data="car.swf"></object>
        <select>
            <optgroup label="dsa">
                <option value="ddd">lorem</option>
                <option value="dd">lorem</option>
            </optgroup>
        </select>
    </div>
    <iframe src="http://www.neti.ee" width="100%" frameborder="0"></iframe>
</div>
<hr>
<footer style="background-color:orangered">
    <p>Lorem ipsum dolor sit amet, consectetur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eaque eius molestiae omnis quasi quisquam.</p>
</footer>
<script>

    var c = document.getElementById("canvas");
    var ctx = c.getContext("2d");
    ctx.fillStyle = "#FF0010";
    ctx.fillRect(1, 0, 80, 100);

</script>
</body>
</html>