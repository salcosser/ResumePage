<?php require("header.php");?>



<div class="jumbotron">

<div class="row">
  <div class="col-lg-8">
  <h3 class="display-3"style="color:salmon">MIP Connector and Check Request Tool</h3>
  <h4 class="display-4">Accounting Middleware</h4>
  </div>

        <div class="col-lg-4">
        <ul>
      <li>
        <span> > Languages used: Java, Scala, CSS, HTML, JavaScript, and SQL
      </li>
      <li>
        <span> > Frameworks and other bits used: Play Framework, 4dflib, MIP API, Amplifund API, and the Salesforce API </span>
      </li>



      <li>
        <span> > <a href="https://www.collective-strategies.com/solutions/cloud-software-development-hosting/">Web Link to demos</a></span>
      </li>
     

      </ul>
      </div>
</div>

</div>
<!--
          "Don't feel as if the key to successful computing is
          only in your hands. What's in your hands, I think and
          hope, is intelligence: the ability to see the machine as
          more than when you were first led up to it, that you can
          make it more."
          —Alan J. Perlis (April 1, 1922 — February 7, 1990)
-->
<div class="row cb" >





 <div class="col-md-4 screenshot" ><img src="img/maristxCC.png" class="img"></div>
 <div class="col-md-8">

  <p class="project-copy">

      &nbsp I have been working with the CCAC agile development team at Marist College since September of 2019. My work entails building middleware for an accounting company called Collective Strategies. The major product we are developing is called MIP Connector. MIP Connector is a multi-tenant program that allows multiple accountants to have an easy connection among multiple accounting programs. The program connects the grant management tool called Amplifund, Abila’s MIP accounting database tool, and Salesforce. All of the processing is done within our middleware which is based on the Play Framework. I apologize for the lack of screenshots for this project. There is not much to see on the front end of this program, as most of the work is done behind the scenes within the API. </div>
</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-md-4 screenshot" ><img src="img/play.png" class="img"></div>
 <div class="col-md-8">
<p class="project-copy">

    &nbspOne of the main focuses I had in the beginning of my time with CCAC was the Check Request Tool. Check request tool, simply put, is a faster way for accountants to access information from MIP. Each session contains documents, which contain transactions. There are sessions, documents, and transactions for Cash Receipts and Journal Vouchers. Although I did not directly work on the tool itself, I was respon. This was a great opportunity for me to delve into how the Play MVC Framework functions. The project I am working on currently more has to do with the basis of MIP Connector.
 </div>

</div>
<div style="height:50px"></div>
<div class="row cb" >

<div class="col-md-4 screenshot" ><img src="img/filteringUI.png" class="img"></div>
<div class="col-md-8">
<p class="project-copy">
    &nbspTwo of the softwares that MIP Connector connects are Amplifund and MIP. Amplifund and MIP cannot directly talk as the two softwares use different encodings and forms when it comes to storing data. One of the main features of MIP Connector is to be able to interpret a request from Amplifund, format a request to MIP that is relevant to MIP, and return the result. Although, there have been issues in testing where there would be too much information coming back to Amplifund. So, our client asked me to make a system to filter that information. This has been what I have been focusing since getting back to school in August. I have created UI elements to enable the Accountants to specify what they would like to see from MIP, as well as some slight modifications API endpoints to utilize these new features.</p>
</div>

  </div>

  <div class="col-12 text-center cs-button-container">
    <button class=" btn "  onclick="showCode()">Give me a taste of the code! (double-click)</button>
  </div>
  <div class="codeSnippet" id="csc">
<div class="card">
<div class="card-header">
<h4> This is a (deprecated) function used to take an ajax call on the frontend, and turn it into a set of real filters</h4>
</div>
<div class="card-body">

<pre><code class="language-java">
	public Result getFilteredResults(Http.Request request) {
		JsonNode json = request.body().asJson();
		String tid = json.get(&quot;tid&quot;).asText();
		JsonNode filteringJson = request.body().asJson().get(&quot;params&quot;);
		Long tenantId = Long.parseLong(tid);
		JSONObject responseJson = new JSONObject();


			MipTokens MipToken = new MipTokens();
			JSONObject params = new JSONObject();


			try {
				//System.out.println(&quot;logging into mip&quot;);
				loginIntoMip(tenantId, MipToken);
				//System.out.println(&quot;successfully logged into mip&quot;);
			} catch (Exception ex) {
				System.out.println(&quot;Error in Get filtered results Login: &quot; + ex);
			}
			try {

				String path = &quot;/api/transactions/gl/posted&quot;;

				if (filteringJson.has(&quot;pgSize&quot;)) {
					params.put(&quot;page[size]&quot;, filteringJson.get(&quot;pgSize&quot;));
				}
				if(filteringJson.has(&quot;matchNum&quot;)){
					params.put(&quot;filter[sMatchDocNum]&quot;, filteringJson.get(&quot;matchNum&quot;));
				}
				if(filteringJson.has(&quot;fromDate&quot;)){
					params.put(&quot;filter[dtmPostTo][from]&quot;, filteringJson.get(&quot;fromDate&quot;));
				}
				if(filteringJson.has(&quot;toDate&quot;)){
					params.put(&quot;filter[dtmPostTo][to]&quot;, filteringJson.get(&quot;toDate&quot;));
				}
				if(filteringJson.has(&quot;singDate&quot;)){
					params.put(&quot;filter[dtmPostTo]&quot;, filteringJson.get(&quot;singDate&quot;));
				}





				//assuming everything else gets built
				if(params.size() &gt; 0){
					responseJson = RestCalls.RestGetWithParams(MipToken.mipUrl + path, params, &quot;MIP&quot;, MipToken.mipAuthHeader);
				}else{
					responseJson = RestCalls.RestGet(MipToken.mipUrl + path, &quot;MIP&quot;, MipToken.mipAuthHeader);
				}

			} catch (Exception ex) {
				System.out.println(&quot;Error in GetFilteredREsult: &quot; + ex);
			}
			String res  = responseJson.toJSONString();
			return ok(res);


	}
}
</code></pre>
</div>




  </div>
  </div>
</div>






<?php require("footer.php");?>
</body>
</html>
