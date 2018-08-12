<?php include("header.php") ?>
<div id="et-main-area">
  <div id="main-content">
    <div class="container">
      <div id="content-area" class="clearfix">
        <div id="left-area">
          <article id="post-17517" class="et_pb_post post-17517 post type-post status-publish format-standard has-post-thumbnail hentry category-big-data category-featured category-sap-hana category-sap-vora category-top-business-intelligence-blog-2017 tag-big-data tag-hadoop tag-sap-hana tag-sap-hana-vora">
            <div class="et_post_meta_wrapper">
              <h1 class="entry-title">SAP HANA and Hadoop Integration: ETL vs. SDA vs. SDI vs. HANA Vora</h1>
              <p class="post-meta"> by <span class="author vcard"><a href="#" title="Posts by Shankar Narayanan" class="author url fn" rel="author">Shankar Narayanan</a></span> | <span class="published">Apr 4, 2017</span> | <a href="#" rel="category tag">BIG Data</a>, <a href="#" rel="category tag">Featured Blogs</a>, <a href="#" rel="category tag">SAP HANA</a>, <a href="#" rel="category tag">SAP VORA</a>, <a href="#" rel="category tag">Top Business Intelligence Blog 2017</a></p>
              <img src="images/SAP-HANA-and-Hadoop-Integration-ETL-vs-SDA-vs-SDI-vs-HANA-Vora-1.png" alt="SAP HANA and Hadoop Integration: ETL vs. SDA vs. SDI vs. HANA Vora" width="9999" height="9999"></div>
            <div class="entry-content">
              <p>As&nbsp;Hadoop is widely being adopted by enterprises for Big&nbsp;Data storage and processing, many organizations running SAP HANA&nbsp;are looking for effective ways to leverage (as well as integrate) Hadoop&nbsp;in their landscape. In&nbsp;this context, let us look at both platforms and assess various integration options available.</p>
              <p><strong>Benefits of Hadoop</strong></p>
              <p>Hadoop&nbsp;runs on commodity hardware and is capable of storing huge volumes&nbsp;of data. Data storage is cheaper in Hadoop compared to SAP HANA which would require a lot of memory with which the appliance would become very expensive.</p>
              <p>Hadoop is also used as an archival solution. Data that is very old and used for archive is stored in Hadoop so that it&nbsp;can be reused when needed.</p>
              <p>Over time, a lot of frameworks have been built over Hadoop which helps in processing data stored in it. Libraries such as Apache Spark, Pig, Flume, and Hive provide the ability to do complex processing of data including&nbsp;large map-reduce or machine learning.</p>
              <p>Similarly, actions such as log&nbsp;analysis are easier to store and process in Hadoop as it supports raw HDFS file format which would be&nbsp;an expensive&nbsp;operation in SAP HANA.</p>
              <p><strong>Benefits of SAP HANA</strong></p>
              <p>SAP HANA is designed to run complex&nbsp;analytic and transactional data processing at high speed. Being an in-memory appliance, it&nbsp;can process large amount of data faster than Hadoop.</p>
              <p>SAP HANA comes with a rich&nbsp;set of features modeling features needed to handle data without the need to write any programs. It integrates well with SAP Business Warehouse (BW) and other front end SAP tools. SAP&nbsp;HANA also doubles as an application platform (XS) and an appliance making it easy to execute and deploy applications alongside data without needing any separate application servers. All of these&nbsp;make SAP HANA a complete data platform unlike Hadoop which needs&nbsp;third party tools and libraries to write programs to process data.</p>
              <p>SAP HANA comes from a single manufacturer – SAP, while Hadoop comes in various flavors and is backed by Open Source and some enterprise providers such as&nbsp;Cloudera, Horton works and MapR.</p>
              <p><strong>A&nbsp;Hybrid Model: The best of both worlds</strong></p>
              <p>A hybrid model that leverages both SAP HANA and Hadoop would look like this.</p>
              <p>Hadoop would&nbsp;collect and store unstructured data with HDFS and run complex processes with frameworks such as Spark, and SAP HANA would be&nbsp;used to build in-memory analytics and views to easily consume the data for integration (with operational data), reporting &amp; visualization (with other SAP front-end tools).</p>
              <p><img class="aligncenter wp-image-17524 size-full" src="images/SAP-Meets-Big-Data-1.png" alt="SAP Meets Big Data: SAP HANA and Hadoop Ecosystem - 1" width="751" height="230"></p>
              <p>The design specifics of integrated Hadoop and SAP HANA would depend on the nature of the requirement, and some of the integration scenarios &amp; use cases are listed below:</p>
              <p><strong>Scenario 1: Moving data from Hadoop to SAP HANA</strong></p>
              <p>An&nbsp;ETL tool such as SAP BODS can be used to connect month system as shown below.</p>
              <p><img class="aligncenter wp-image-17525 size-full" src="images/SAP-Meets-Big-Data-2.png" alt="SAP Meets Big Data: SAP HANA and Hadoop Ecosystem - 2" width="710" height="253"></p>
              <p>The unstructured data in Hadoop is processed by means of Spark or other library and is then stored as structured data which is used as source for BODS using Hive adapter. The structured data is then loaded into SAP HANA.</p>
              <p><strong>Pros:</strong></p>
              <ul>
                <li>Pre-collected data can be brought into SAP HANA</li>
                <li>Any data collection and remodelling can be done in Hadoop</li>
                <li>ETL is used for periodic data load from Hadoop</li>
                <li>Easy to configure and setup and does not require any separate configuration in Hadoop</li>
              </ul>
              <p><strong>Cons:</strong></p>
              <ul>
                <li>Cannot consume real time data</li>
                <li>Useful only for data of small sizes.</li>
                <li>Loading large, structured Hadoop datasets will result in memory loads and also make SAP HANA expensive</li>
              </ul>
              <p><strong>Scenario 2: Using Smart Data Access / Smart Data Integration</strong></p>
              <p>SAP Smart Data Access (SDA) allows SAP HANA to connect and virtually access data remotely&nbsp;without any need for data to move into SAP HANA. In our case, the tables are consumed as virtual tables and the SQL query is run directly in&nbsp;Hadoop.</p>
              <p>SAP HANA Smart Data Integration (SDI) is the integrated component of SAP HANA which&nbsp;allows for seamless integration with external systems (here Hadoop) without the need for any separate, heterogeneous, non-native tier between the source and SAP HANA. Smart Data Integration is supported from SAP HANA SPS09 and further enhanced in SAP HANA SPS10 making it one of the ideal solutions for bringing real-time data from external systems. In our case, SDI facilitates real-time replication of data from Hadoop to SAP HANA.&nbsp;The data can be either pulled on&nbsp;demand&nbsp;when any query executes. When data in Hadoop&nbsp;changes or gets updated, it gets automatically pushed into SAP HANA.</p>
              <p><img class="aligncenter wp-image-17526 size-full" src="images/SAP-Meets-Big-Data-3.png" alt="SAP Meets Big Data: SAP HANA and Hadoop Ecosystem - 3" width="702" height="253"></p>
              <p>As of the latest version, SAP HANA supports Hive connector (using JDBC), HDFS (using File adapter), SQL on top of Spark (using SAP HANA Spark controller) and direct Hadoop (using ODBC).</p>
              <p><em>Please refer SAP Note 1868209, 1868702 and 2257657 to know more about SDA Integration with Hadoop.</em></p>
              <p><strong>Pros:</strong></p>
              <ul>
                <li>Pre-collected data can be brought into SAP HANA</li>
                <li>Data collection and modelling can be done in Hadoop</li>
                <li>Supports real-time data using SDA;&nbsp;Batch loads are done using&nbsp;SDI</li>
              </ul>
              <p><strong>Cons</strong></p>
              <ul>
                <li>Need to install separate component on Hadoop layer for SDI</li>
                <li>Complex than using ETL</li>
              </ul>
              <p><strong>Scenario 3: Using SAP HANA VORA as a processing tier with Hadoop</strong></p>
              <p>SAP VORA is an in-memory query engine which plugs into apache Hadoop framework to provide interactive analysis. VORA uses SPARK SQL library and compute engine from SAP. SAP HANA VORA can work as standalone component on Hadoop nodes.</p>
              <p>SAP HANA VORA provides advanced processing capabilities that were&nbsp;not possible before. It can read data from SAP HANA to Spark and can write the data back on to SAP HANA. Since it runs on spark, it also provides many advanced functionalities that are&nbsp;offered by spark for data processing.</p>
              <p>SAP VORA also brings the SQL-like capabilities of SAP HANA on top of Hadoop with help of views and in-memory tables.</p>
              <p><img class="aligncenter wp-image-17527 size-full" src="images/SAP-Meets-Big-Data-4.png" alt="SAP Meets Big Data: SAP HANA and Hadoop Ecosystem - 4" width="562" height="241"></p>
              <p><strong>Pros:</strong></p>
              <ul>
                <li>Can directly read data from SAP HANA and write back the processed data (to SAP HANA)</li>
                <li>Provides in-memory capability to build views</li>
                <li>Advanced data processing can be done with help of spark</li>
              </ul>
              <p><strong>Cons:</strong></p>
              <ul>
                <li>Needs additional setup</li>
                <li>Requires a bit of programming knowledge for effective implementation &amp; operations</li>
              </ul>
              <p><strong>Conclusion</strong></p>
              <p>As seen above, each option has its own benefits and drawbacks, and is suited for specific types of use cases.</p>
              <p>Would like to&nbsp;learn&nbsp;more about SAP HANA and Hadoop integration? Reach out to us&nbsp;<a href="#"><strong>here</strong></a>.</p>
              
              
            </div>
            <div class="et_post_meta_wrapper"></div>
          </article>
        </div>
        <div id="sidebar">
          <div id="search-3" class="et_pb_widget widget_search">
            <h4 class="widgettitle">What are you looking for?</h4>
            <form role="search" method="get" id="searchform" class="searchform" action="http://ukbitsolutions.com/">
              <div>
                <label class="screen-reader-text" for="s">Search for:</label>
                <input value="" name="s" id="s" type="text">
                <input id="searchsubmit" value="Search" type="submit">
              </div>
            </form>
          </div>
          <div id="rp4wp_related_posts_widget-2" class="et_pb_widget widget_rp4wp_related_posts_widget">
            <div class="rp4wp-related-posts">
              <h3>Related Blogs</h3>
              <ul>
                <li>
                  <div class="rp4wp-related-post-image"> <a href="#"><img src="images/SAP-HANA-VORA-An-Overview.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="SAP-HANA-VORA-An-Overview" width="128" height="72"></a></div>
                  <div class="rp4wp-related-post-content"> <a href="#">SAP HANA VORA - An Overview</a></div>
                </li>
                <li>
                  <div class="rp4wp-related-post-image"> <a href="#"><img src="images/SAP-BW4HANA-vs.-BW-on-HANA-Series-Part-1-–-Query-Execution-Algorithmic-Pushdown.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="SAP-BW4HANA-vs.-BW-on-HANA-Series--Part-1-–-Query-Execution-&amp;-Algorithmic-Pushdown" width="128" height="72"></a></div>
                  <div class="rp4wp-related-post-content"> <a href="#">SAP BW4HANA vs. BW on HANA Series : Part 1 – Query Execution &amp; Algorithmic Pushdown</a></div>
                </li>
                <li>
                  <div class="rp4wp-related-post-image"> <a href="#"><img src="images/SAP-HANA-VORA-for-Machine-Learning-SAP-HANA-PAL-vs-Spark-ML.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="SAP-HANA-VORA-for-Machine-Learning-SAP-HANA-PAL-vs-Spark-ML" width="128" height="72"></a></div>
                  <div class="rp4wp-related-post-content"> <a href="#">SAP HANA VORA for Machine Learning: SAP HANA PAL vs Spark ML</a></div>
                </li>
                <li>
                  <div class="rp4wp-related-post-image"> <a href="#"><img src="images/Know-your-HANA-Editions.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="know-your-hana-editions" width="128" height="72"></a></div>
                  <div class="rp4wp-related-post-content"> <a href="#">Know Your SAP HANA Editions</a></div>
                </li>
              </ul>
            </div>
          </div>
          <div id="weptile-image-slider-widget-2" class="et_pb_widget widget_weptile-image-slider-widget">
            <div class="slider-wrapper weptile-image-slider-widget-slider-wrapper theme-default widget-weptile-image-slider-widget-2-weptile-image-slider-widget-nivo-slider">
              <div class="nivoSliderWeptile" id="widget-weptile-image-slider-widget-2-weptile-image-slider-widget-nivo-slider"><a href="#" target="_blank" rel="" class="nivo-imageLink" style="display: none;"><img src="images/VBX_Blog_Ad-resized.png" alt="" title="" style="display: none;"></a><a href="#" target="_blank" rel="" class="nivo-imageLink" style="display: none;"><img src="images/azure-advanced-analytics-sap-cutomers-webinar-blog-ad-resized-300x500.png" alt="" title="" style="width: 195px; visibility: hidden; display: inline;"></a><a href="#" target="_blank" rel="" class="nivo-imageLink" style="display: none;"><img src="images/top-3-bi-blogs-2017-visual-bi-blog-ad-resized-300x500.jpg" alt="Top 3 BI Blogs - 2017" title="" style="width: 195px; visibility: hidden; display: inline;"></a><a href="#" target="_blank" rel="" class="nivo-imageLink" style="display: none;"><img src="images/top-3-business-intelligence-webinars-2017-visual-bi-blog-ad-resized-300x500.png" alt="Top 3 BI Webinars - 2017" title="" style="width: 195px; visibility: hidden; display: inline;"></a><a href="#" target="_blank" rel="" class="nivo-imageLink" style="display: block;"><img src="images/VBX_Blog_Ad-resized.png" alt="" title="" style="width: 195px; visibility: hidden; display: inline;"></a><img class="nivo-main-image" src="images/VBX_Blog_Ad-resized.png" style="display: inline; height: 351px; width: 195px;">
                <div class="nivo-caption"></div>
                <div class="nivo-slice" name="0" style="width: 195px; height: 24px; opacity: 1; overflow: hidden; left: 0px;"><img src="images/VBX_Blog_Ad-resized.png" style="position:absolute; width:195px; height:auto; display:block !important; top:0; left:-0px;"></div>
                <div class="nivo-slice" name="1" style="left: 49px; width: 49px; height: 24px; opacity: 0; overflow: hidden;"><img src="images/VBX_Blog_Ad-resized.png" style="position:absolute; width:195px; height:auto; display:block !important; top:0; left:-49px;"></div>
                <div class="nivo-slice" name="2" style="left: 98px; width: 49px; height: 24px; opacity: 0; overflow: hidden;"><img src="images/VBX_Blog_Ad-resized.png" style="position:absolute; width:195px; height:auto; display:block !important; top:0; left:-98px;"></div>
                <div class="nivo-slice" name="3" style="left: 147px; width: 48px; height: 24px; opacity: 0; overflow: hidden;"><img src="images/VBX_Blog_Ad-resized.png" style="position:absolute; width:195px; height:auto; display:block !important; top:0; left:-147px;"></div>
              </div>
            </div>
          </div>
          
          <div id="text-6" class="et_pb_widget widget_text">
            <h4 class="widgettitle">Categories</h4>
            <div class="textwidget">
              <ul>
                <li><a href="#">SAP HANA</a></li>
                <li><a href="#">SAP BW4HANA</a></li>
                <li><a href="#">SAP BusinessObjects</a></li>
                <li><a href="#">SAP Analytics Cloud</a></li>
                <li><a href="#">SAP BusinessObjects Design Studio</a></li>
                <li><a href="#">SAP VORA</a></li>
                <li><a href="#">BIG Data</a></li>
                <li><a href="#">Predictive Analytics</a></li>
                <li><a href="#">Fiori</a></li>
                <li><a href="#">SAP Lumira</a></li>
                <li><a href="#">Power BI</a></li>
                <li><a href="#">Tableau</a></li>
                <li><a href="#">TIBCO Spotfire</a></li>
                <li><a href="#">Mobile BI</a></li>
                <li><a href="#">VBX Product Extensions</a></li>
                <li><a href="#">More...</a></li>
              </ul>
            </div>
          </div>
          
          <div id="collapsarch-2" class="et_pb_widget widget_collapsarch">
            <h4 class="widgettitle">Archives</h4>
            <ul id="widget-collapsarch-2-top" class="collapsing archives list">
              <li class="collapsing archives expand"><span title="click to expand" class="collapsing archives expand"><span class="sym">?</span></span><a href="#">2018 <span class="yearCount">(116)</span> </a>
                <div style="display:none" id="collapsArch-2018:2">
                  <ul>
                    <li class="collapsing archives "><a href="#" title="July">July <span class="monthCount">(5)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="June">June <span class="monthCount">(10)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="May">May <span class="monthCount">(15)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="April">April <span class="monthCount">(29)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="March">March <span class="monthCount">(23)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="February">February <span class="monthCount">(25)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="January">January <span class="monthCount">(9)</span> </a></li>
                  </ul>
                </div>
              </li>
              <li class="collapsing archives expand"><span title="click to expand" class="collapsing archives expand"><span class="sym">?</span></span><a href="#">2017 <span class="yearCount">(119)</span> </a>
                <div style="display:none" id="collapsArch-2017:2">
                  <ul>
                    <li class="collapsing archives "><a href="#" title="December">December <span class="monthCount">(5)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="November">November <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="October">October <span class="monthCount">(13)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="September">September <span class="monthCount">(32)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="August">August <span class="monthCount">(15)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="July">July <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="June">June <span class="monthCount">(5)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="May">May <span class="monthCount">(11)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="April">April <span class="monthCount">(9)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="March">March <span class="monthCount">(13)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="February">February <span class="monthCount">(7)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="January">January <span class="monthCount">(4)</span> </a></li>
                  </ul>
                </div>
              </li>
              <li class="collapsing archives expand"><span title="click to expand" class="collapsing archives expand"><span class="sym">?</span></span><a href="#">2016 <span class="yearCount">(35)</span> </a>
                <div style="display:none" id="collapsArch-2016:2">
                  <ul>
                    <li class="collapsing archives "><a href="#" title="December">December <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="November">November <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="October">October <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="September">September <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="July">July <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="June">June <span class="monthCount">(5)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="May">May <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="April">April <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="March">March <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="February">February <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="January">January <span class="monthCount">(2)</span> </a></li>
                  </ul>
                </div>
              </li>
              <li class="collapsing archives expand"><span title="click to expand" class="collapsing archives expand"><span class="sym">?</span></span><a href="#">2015 <span class="yearCount">(57)</span> </a>
                <div style="display:none" id="collapsArch-2015:2">
                  <ul>
                    <li class="collapsing archives "><a href="#" title="December">December <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="November">November <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="October">October <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="September">September <span class="monthCount">(2)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="August">August <span class="monthCount">(7)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="July">July <span class="monthCount">(10)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="June">June <span class="monthCount">(10)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="May">May <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="April">April <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="March">March <span class="monthCount">(6)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="February">February <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="January">January <span class="monthCount">(4)</span> </a></li>
                  </ul>
                </div>
              </li>
              <li class="collapsing archives expand"><span title="click to expand" class="collapsing archives expand"><span class="sym">?</span></span><a href="#">2014 <span class="yearCount">(78)</span> </a>
                <div style="display:none" id="collapsArch-2014:2">
                  <ul>
                    <li class="collapsing archives "><a href="#" title="December">December <span class="monthCount">(5)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="November">November <span class="monthCount">(11)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="October">October <span class="monthCount">(16)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="September">September <span class="monthCount">(15)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="August">August <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="July">July <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="June">June <span class="monthCount">(7)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="May">May <span class="monthCount">(5)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="April">April <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="March">March <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="February">February <span class="monthCount">(2)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="January">January <span class="monthCount">(8)</span> </a></li>
                  </ul>
                </div>
              </li>
              <li class="collapsing archives expand"><span title="click to expand" class="collapsing archives expand"><span class="sym">?</span></span><a href="#">2013 <span class="yearCount">(23)</span> </a>
                <div style="display:none" id="collapsArch-2013:2">
                  <ul>
                    <li class="collapsing archives "><a href="#" title="December">December <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="November">November <span class="monthCount">(2)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="October">October <span class="monthCount">(2)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="September">September <span class="monthCount">(2)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="August">August <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="July">July <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="June">June <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="May">May <span class="monthCount">(3)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="April">April <span class="monthCount">(4)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="March">March <span class="monthCount">(2)</span> </a></li>
                  </ul>
                </div>
              </li>
              <li class="collapsing archives expand"><span title="click to expand" class="collapsing archives expand"><span class="sym">?</span></span><a href="#">2012 <span class="yearCount">(6)</span> </a>
                <div style="display:none" id="collapsArch-2012:2">
                  <ul>
                    <li class="collapsing archives "><a href="#" title="December">December <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="November">November <span class="monthCount">(2)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="September">September <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="July">July <span class="monthCount">(1)</span> </a></li>
                    <li class="collapsing archives "><a href="#" title="June">June <span class="monthCount">(1)</span> </a></li>
                  </ul>
                </div>
              </li>
              <li style="display:none"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include("footer.php") ?>