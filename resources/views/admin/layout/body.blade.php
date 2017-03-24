
        <div class="boxed">

            <!--CONTENT 主体内容-->
            <!--===================================================-->
            <div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Expanded Navigation</h1>

                    <!--Searchbox-->
                    <div class="searchbox">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="ti-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


                <!--Breadcrumb-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End breadcrumb-->




                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">


					<!-- QUICK TIPS -->
					<!-- ==================================================================== -->
					<h3>Your content here...</h3>
					<br>
					<a href="index.html" class="btn btn-dark">Back</a>
					<br><br><br>
					<h3>Quick Tips</h3>
					<p>You may remove all ID or Class names which contain <code>demo-</code>, they are only used for demonstration.</p>
					<br>

					<h4>Boxed Layout <span class="label label-info">New</span></h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Boxed Layout</td>
					                <td>Add <code>.boxed-layout</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Fluid Layout</td>
					                <td>Remove <code>.boxed-layout</code> from the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Boxed Layout with background image</td>
					                <td>
					                    <p class="text-main text-semibold">Add it in your own custom CSS Files</p>
					                    You may add your own class in your css custom file with path to your image.
					                    <pre>#container.boxed-layout {<br>&#09;background-image: url("path-to-my-image.jpg");<br>&#09;background-repeat: no-repeat;<br>&#09;background-size: cover;<br>}</pre>
					                    <br>
					                    <p class="text-main text-semibold">Re-compiling using CSS preprocessors</p>
					                    <p>Fill the the variable <code>@boxed-bg-img</code> in <code>_variable.less</code> (LESS, SASS or SCSS) with the path to your image.</p>
					                    <pre>..<br>@boxed-bg-img    : "path-to-my-image.jpg"<br>...</pre>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<br>

					<h4>Navigation</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Expanded the navigation by default</td>
					                <td>Add <code>.mainnav-lg</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Fixed navigation</td>
					                <td>Add <code>.mainnav-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Create a ToggleButton for navigation</td>
					                <td>Add <code>.mainnav-toggle</code> to the button.</td>
					            </tr>
					            <tr>
					                <td></td>
					                <td>
					                    <button class="btn btn-lg btn-primary mainnav-toggle">Toggle Navigation</button>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>

					<h4>Aside</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Make Aside visible by default</td>
					                <td>Add <code>.aside-in</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Fixed aside</td>
					                <td>Add <code>.aside-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Floating Aside <label class="label label-info">New</label></td>
					                <td>Add <code>.aside-float</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Aside on the left side</td>
					                <td>Add <code>.aside-left</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Use the bright color schemes</td>
					                <td>Add <code>.aside-bright</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Create a ToggleButton for aside</td>
					                <td>Add <code>.aside-toggle</code> to the button.</td>
					            </tr>
					            <tr>
					                <td></td>
					                <td>
					                    <button class="btn btn-success btn-lg aside-toggle">Toggle Aside</button>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Navbar</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Fixed navbar</td>
					                <td>Add <code>.navbar-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Footer</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Fixed footer</td>
					                <td>Add <code>.footer-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Color Schemes</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Apply a different color scheme</td>
					                <td>You can change whole color scheme of your website by adding a color scheme stylesheet into the <code>&lt;head></code>.</td>
					            </tr>
					            <tr>
					                <td></td>
					                <td><pre>&lt;head><br>	...<br>	&lt;link href="path-to-the-color-scheme.css" rel="stylesheet"><br>&lt;/head></pre></td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Animation</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Remove animation</td>
					                <td>Remove the class <code>.effect</code> from <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Add different slide transitions to the Navigation and Aside</td>
					                <td>
					                    Add <code>.effect</code> to the <code>#container</code> and then combined with the class name of the transition function.
					                    <br>
					                    <br>
					                    <table>
					                        <thead>
					                            <tr>
					                                <th style="width: 250px;">Transition function</th>
					                                <th>Class name</th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <tr>
					                                <td>easeInQuart</td>
					                                <td><code>.easeInQuart</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeOutQuart</td>
					                                <td><code>.easeOutQuart</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeInBack</td>
					                                <td><code>.easeInBack</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeOutBack</td>
					                                <td><code>.easeOutBack</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeInOutBack</td>
					                                <td><code>.easeInOutBack</code></td>
					                            </tr>
					                            <tr>
					                                <td>steps</td>
					                                <td><code>.steps</code></td>
					                            </tr>
					                            <tr>
					                                <td>jumping</td>
					                                <td><code>.jumping</code></td>
					                            </tr>
					                            <tr>
					                                <td>rubber</td>
					                                <td><code>.rubber</code></td>
					                            </tr>
					                        </tbody>
					                    </table>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<!-- ==================================================================== -->
					<!-- END QUICK TIPS -->

                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

        </div>
