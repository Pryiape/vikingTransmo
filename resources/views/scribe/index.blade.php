<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Viking Transmo API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-dashboard-protege" class="tocify-header">
                <li class="tocify-item level-1" data-unique="dashboard-protege">
                    <a href="#dashboard-protege">Dashboard protégé</a>
                </li>
                                    <ul id="tocify-subheader-dashboard-protege" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="dashboard-protege-GETdashboard">
                                <a href="#dashboard-protege-GETdashboard">Retourne la vue du tableau de bord.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETlogin">
                                <a href="#endpoints-GETlogin">GET login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTlogin">
                                <a href="#endpoints-POSTlogin">POST login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTlogout">
                                <a href="#endpoints-POSTlogout">POST logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETforgot-password">
                                <a href="#endpoints-GETforgot-password">Show the reset password link request view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETreset-password--token-">
                                <a href="#endpoints-GETreset-password--token-">Show the new password view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTforgot-password">
                                <a href="#endpoints-POSTforgot-password">Send a reset link to the given user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTreset-password">
                                <a href="#endpoints-POSTreset-password">Reset the user's password.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETuser-confirm-password">
                                <a href="#endpoints-GETuser-confirm-password">Show the confirm password view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETuser-confirmed-password-status">
                                <a href="#endpoints-GETuser-confirmed-password-status">Get the password confirmation status.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTuser-confirm-password">
                                <a href="#endpoints-POSTuser-confirm-password">Confirm the user's password.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETsanctum-csrf-cookie">
                                <a href="#endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETregister">
                                <a href="#endpoints-GETregister">GET register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTregister">
                                <a href="#endpoints-POSTregister">POST register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTexistEmail">
                                <a href="#endpoints-POSTexistEmail">POST existEmail</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETbuilds">
                                <a href="#endpoints-GETbuilds">Affiche la liste des builds de l'utilisateur connecté.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETbuilds-create">
                                <a href="#endpoints-GETbuilds-create">Affiche le formulaire de création d'un nouveau build.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTbuilds">
                                <a href="#endpoints-POSTbuilds">Enregistre un nouveau build en base de données.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETbuilds--id-">
                                <a href="#endpoints-GETbuilds--id-">Affiche un build spécifique.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETbuilds--build_id--edit">
                                <a href="#endpoints-GETbuilds--build_id--edit">Affiche le formulaire d'édition d’un build.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTbuilds--id-">
                                <a href="#endpoints-PUTbuilds--id-">Met à jour un build existant.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETmentions-legales">
                                <a href="#endpoints-GETmentions-legales">Invoke the controller method.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-pages-publiques" class="tocify-header">
                <li class="tocify-item level-1" data-unique="pages-publiques">
                    <a href="#pages-publiques">Pages publiques</a>
                </li>
                                    <ul id="tocify-subheader-pages-publiques" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="pages-publiques-GET-">
                                <a href="#pages-publiques-GET-">Affiche la page d'accueil avec les builds publics.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pages-publiques-GETa-propos">
                                <a href="#pages-publiques-GETa-propos">Affiche la page "À propos".</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-profil-utilisateur" class="tocify-header">
                <li class="tocify-item level-1" data-unique="profil-utilisateur">
                    <a href="#profil-utilisateur">Profil utilisateur</a>
                </li>
                                    <ul id="tocify-subheader-profil-utilisateur" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="profil-utilisateur-GETprofile">
                                <a href="#profil-utilisateur-GETprofile">Affiche le profil de l'utilisateur connecté.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="profil-utilisateur-GETprofile-edit">
                                <a href="#profil-utilisateur-GETprofile-edit">Affiche le formulaire d'édition du profil.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="profil-utilisateur-PUTprofile">
                                <a href="#profil-utilisateur-PUTprofile">Met à jour le profil de l'utilisateur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="profil-utilisateur-GETapp_profile">
                                <a href="#profil-utilisateur-GETapp_profile">Affiche le profil de l'utilisateur connecté.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 21, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="dashboard-protege">Dashboard protégé</h1>

    

                                <h2 id="dashboard-protege-GETdashboard">Retourne la vue du tableau de bord.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETdashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETdashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IkpUemFkNGlhZHlMV3Yxc0xEOU11Qnc9PSIsInZhbHVlIjoia085TXJsdjZDbHljciswWVNhRlZFN1haUnlGUFEvaUU4NU9BSGEyd3VkU1JhU2N2SmUwWG9NUnBJNlhQVWFDclJ5TFN4aUZndW54L01NK1QrRXZLYjAxWHpkL1U5R0VoVEpFc0laYVczSFEzWmh2eWdadGNXMGMxd1Q4Z2NzZ1AiLCJtYWMiOiIzZjllYzkyOGRjNTVkZmRjOTYzZjM0MjYxMWFhNmRjZTk4NTBjZDQ3YTdkY2Y4NTk5MTNjZTBhYjc2MjU3NjE2IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Iml1ZnVFa0UzMm9rQ240Qmc3M3NMa1E9PSIsInZhbHVlIjoiaTRuNGhlVjRkSXdNTmFlbDd1TnlrcDNmOWNWaDFMeHhRUmhSSC95b1hpNWtJaDNqM3hLcGNMZWlKNzJMTnZEaFZqdVB5bWU3T2hDSS9jWmZJQkNLeHdwQ2tlRWJGN05POEcvclBiaGNFc3RMV0ZjYzVUUFhJQ2lRdlpkaU4wQnMiLCJtYWMiOiI5M2M2YjMxZmY2OGI3MTk0ZGYwYjY4OWViOWVkMmYwMTgyNjNiZTY4MmZhNjU5NmQxYWE4YWE3MjFkNzFlYmQ4IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETdashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETdashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETdashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETdashboard" data-method="GET"
      data-path="dashboard"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETdashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETdashboard"
                    onclick="tryItOut('GETdashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETdashboard"
                    onclick="cancelTryOut('GETdashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETdashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>dashboard</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETdashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETdashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETlogin">GET login</h2>

<p>
</p>



<span id="example-requests-GETlogin">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETlogin">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IkZTcVdtNUd0UWdKOXRmcEFTUFY5K1E9PSIsInZhbHVlIjoiaUp0SkJ3UVJvOUhmbFdyZW9DZEVnRXZQUVhXR1VsT3R3cHd5R29CZ2hRNGtOQjZ4VnYrNUdpeTFPUUNnQzB2dWdNVUprUnRzR3pYWHE1VlI2YjVxQkVXQloxRFZuWTdLU240Q2VzZWxuWTQvdGVBY1JlY3A2ZVpybFlDVTEyTFoiLCJtYWMiOiJkYjFmMzM3NjY5MmI1NGI3Y2ZkNjg0ODBhNDA4YjkwNmE3NjgxZmMxZGRlNDQ2OGZjOWMzNzY4NjcxYWVhNjU5IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Ii90c0NRYmNKNnNLY3p2dFBLYmluZFE9PSIsInZhbHVlIjoiT0xiaGd0T3NINm5WbTlHRTd4R1A2Y3p1TDRZYm9DMmFyazVzUi9OejQrSjYwVjRUZDM2TVN2bzA4S3ZEN25PdldYVmt6RXpteVg3WHFXbmRHL3drTWh1YTVYTmFwOGNFWUppbWg1aVhaaDJVK3U4UTI5aFZvZTJ2aFlMMXZYaWIiLCJtYWMiOiJkMWFmOTZhZDE4NGM0MzgzNTUzNmQ4MDg3ZjVkNTJkZWJhYTU1MzIxN2YyYWU1ZWM2MjY4NDA2YTlhNWEzNzQ5IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;title&gt;Viking Transmo - Connexion&lt;/title&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
    &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

    &lt;!-- Bootstrap --&gt;
    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Custom CSS --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/css/app.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;

    
    &lt;!-- Bootstrap 5.3.2 --&gt;
&lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;

&lt;nav class=&quot;navbar navbar-expand-lg navbar-light bg-light&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;a class=&quot;navbar-brand d-flex align-items-center&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;http://localhost/viking.jpg&quot; alt=&quot;Viking Logo&quot; style=&quot;height: 40px; margin-right: 10px;&quot;&gt;
            Viking Violet
        &lt;/a&gt;
        &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarSupportedContent&quot; 
                aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
            &lt;ul class=&quot;navbar-nav me-auto mb-2 mb-lg-0&quot;&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost&quot;&gt;Home&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost/a-propos&quot;&gt;About&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;

            &lt;div class=&quot;btn-group&quot;&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                Connexion
                &lt;/button&gt;
                    &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt; &lt;!-- Ajout de dropdown-menu-end --&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            
                
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;

&lt;!-- Script pour forcer l&#039;initialisation des dropdowns si n&eacute;cessaire --&gt;
&lt;script&gt;
    document.addEventListener(&quot;DOMContentLoaded&quot;, function() {
        var dropdownElementList = [].slice.call(document.querySelectorAll(&#039;.dropdown-toggle&#039;))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
    });
&lt;/script&gt;
    
    &lt;main class=&quot;container py-4&quot;&gt;
           &lt;div class=&quot;container&quot;&gt;
        
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-6 mx-auto&quot;&gt;
                
                &lt;h1 class=&quot;text-center text-muted mb-3 mt-5&quot;&gt;Veuillez vous connecter&lt;/h1&gt;
                &lt;p class=&quot;text-center text-muted mb-5&quot;&gt;Vos builds vous attendent&lt;/p&gt;
                &lt;form action=&quot;http://localhost/login&quot; method=&quot;post&quot;&gt;
                    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;XTQRzbxzsmqQXTSVGvlaaAq8sODIf0ygebY8Hqa4&quot; autocomplete=&quot;off&quot;&gt;                    
                    &lt;label for=&quot;email&quot;&gt;Email&lt;/label&gt;
                    &lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; class=&quot;form-control mb-3 &quot; value=&quot;&quot; required autocomplete=&quot;email&quot; autofocus&gt;
                    
                    
                    &lt;label for=&quot;password&quot;&gt;Mot de passe&lt;/label&gt;
                    &lt;input type=&quot;password&quot; name=&quot;password&quot; id=&quot;password&quot; class=&quot;form-control mb-3 &quot; required&gt;
                    
                    
                    &lt;div class=&quot;d-flex justify-content-between align-items-center mb-3&quot;&gt;
                        &lt;div class=&quot;form-check&quot;&gt;
                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;remember&quot; name=&quot;remember&quot; &gt;
                            &lt;label class=&quot;form-check-label&quot; for=&quot;remember&quot;&gt;Rester connect&eacute;&lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    
                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Connexion&lt;/button&gt;

                    
                    &lt;p class=&quot;text-center text-muted mt-5&quot;&gt;Pas encore de compte ? &lt;a href=&quot;http://localhost/register&quot;&gt;Cr&eacute;er un compte&lt;/a&gt;&lt;/p&gt;
                &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
   &lt;/div&gt;
    &lt;/main&gt;

    
    &lt;footer class=&quot;bg-light text-center py-3 mt-5 border-top&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;p class=&quot;mb-1&quot;&gt;&copy; 2025 Viking Violet. Tous droits r&eacute;serv&eacute;s.&lt;/p&gt;
        &lt;a href=&quot;http://localhost/mentions-legales&quot; class=&quot;text-decoration-none text-muted&quot;&gt;Mentions l&eacute;gales&lt;/a&gt;
    &lt;/div&gt;
&lt;/footer&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://localhost/assets/js/app.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/lib/jquery/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/main/user/user.js&quot;&gt;&lt;/script&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETlogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETlogin" data-method="GET"
      data-path="login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETlogin"
                    onclick="tryItOut('GETlogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETlogin"
                    onclick="cancelTryOut('GETlogin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETlogin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETlogin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETlogin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTlogin">POST login</h2>

<p>
</p>



<span id="example-requests-POSTlogin">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTlogin">
</span>
<span id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTlogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTlogin" data-method="POST"
      data-path="login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTlogin"
                    onclick="tryItOut('POSTlogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTlogin"
                    onclick="cancelTryOut('POSTlogin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTlogin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTlogin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTlogin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTlogin"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTlogin"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTlogout">POST logout</h2>

<p>
</p>



<span id="example-requests-POSTlogout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTlogout">
</span>
<span id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTlogout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTlogout" data-method="POST"
      data-path="logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTlogout"
                    onclick="tryItOut('POSTlogout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTlogout"
                    onclick="cancelTryOut('POSTlogout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTlogout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTlogout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTlogout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETforgot-password">Show the reset password link request view.</h2>

<p>
</p>



<span id="example-requests-GETforgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETforgot-password">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InpOd2FGZjRweFVwb09kaE9nSFRqd0E9PSIsInZhbHVlIjoiREtnZ2I4QzdUN3ZIc0V5dzlXZkV6ajB2M2ZlSklxQzZZN0NiMU5YWGY3dVhDZk5RNDROS0dPWkJwc2llOGNqVnZSK2hscHhrR0NMNzgydCtqWmlacXkyVGQ5Yk5tSy8vT0M0anRDUjZTRk9wbk9TNnVJTkg2R3hqVVN3L3VGQnQiLCJtYWMiOiJkZTkyN2JjMTBlMjdmNDJkM2Y1NDJkNDE4NDZkNWM0MWY1MDM0NTQ2NzExZDJhOTE3OGY0NjQyZWYwMDA2NGQ2IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InFTMTN4eXJPbE03WmtPVUdWVjZvOUE9PSIsInZhbHVlIjoiQmhOYUtGR1I3bGEyaDR0Vy9aYk1MZ1BlTktlSzdDVFBZaGh1QjlaV2lGc2YrYTJhTDFFaU9VRWo5cXU1MzBWMzYraDhFdmJCbU1IbnhzTzUyb1JnSGZGbzV3eWx0OEdoRmlhNzlWWG9neC9ySTMvbnh1Q2dFek1tZ3VzY1lRdHgiLCJtYWMiOiIzZDJhMjkwNjg3YTFlMjEwMzRkNjlkYWIyYTkwMDczZTBhNWIyZmE0ZjBiM2U1ZmRkNTljZjc0YjI1YjUzOWI5IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETforgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETforgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETforgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETforgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETforgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETforgot-password" data-method="GET"
      data-path="forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETforgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETforgot-password"
                    onclick="tryItOut('GETforgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETforgot-password"
                    onclick="cancelTryOut('GETforgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETforgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETforgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETforgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETreset-password--token-">Show the new password view.</h2>

<p>
</p>



<span id="example-requests-GETreset-password--token-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/reset-password/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/reset-password/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETreset-password--token-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InRnZC96RWdZZHhFbGhPNllSL3U4bHc9PSIsInZhbHVlIjoidkRTM3FFTHJZYTRnSmdsbWU1eXh1SzQ5L2tGTFBBT0ZPU0FqRElyUTJmUlhacnc3bjJIU3gxUXM0Y1JQaGs3NVh4aTcrWGNZRXZOTDBMbW1UaXB3RjJlL2tDbk9vSkZQbWpzMXpQUmtoSFlPa0lIMGFjS0xncjBtblRXM0k3RkgiLCJtYWMiOiJmZWE1MTgzMDBlYjY1NzcxODYwOWM4ODA3YzhkMWNiYjM1NzUzZmQyZTcyM2U0ODZlZGQ1MGQ0Yzg1OThkMThjIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlJOelNEOUZHVlhVbnhBaFBLWnpDZlE9PSIsInZhbHVlIjoiT0JCemVvM2VTRHNvczJ0RUtwUzJNTEluUXMxSkxQN2QyY0tJRkRCNHM1cDJyWHhXRENrMC91b2owcnJGamd0clhwT3NUNUI3WVRVOVZMQzRoTFNWdFJ4eTR5THQ5WEJncE9hSVYzNmRsT1pFWW9GeERJOXBZOFFhS0pkNTZqS1giLCJtYWMiOiJiZmZmZWQwMGNkMjcwMjJlNTZlODA3NTI2YTY5MDM3ZTU5ZTliMTkzYWMzNjJhY2Q0NmUyMmMyYjQyZjc2YzA1IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETreset-password--token-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETreset-password--token-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETreset-password--token-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETreset-password--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETreset-password--token-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETreset-password--token-" data-method="GET"
      data-path="reset-password/{token}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETreset-password--token-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETreset-password--token-"
                    onclick="tryItOut('GETreset-password--token-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETreset-password--token-"
                    onclick="cancelTryOut('GETreset-password--token-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETreset-password--token-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>reset-password/{token}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETreset-password--token-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETreset-password--token-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="GETreset-password--token-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTforgot-password">Send a reset link to the given user.</h2>

<p>
</p>



<span id="example-requests-POSTforgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTforgot-password">
</span>
<span id="execution-results-POSTforgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTforgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTforgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTforgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTforgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTforgot-password" data-method="POST"
      data-path="forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTforgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTforgot-password"
                    onclick="tryItOut('POSTforgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTforgot-password"
                    onclick="cancelTryOut('POSTforgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTforgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTforgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTforgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTreset-password">Reset the user&#039;s password.</h2>

<p>
</p>



<span id="example-requests-POSTreset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"architecto\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "architecto",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTreset-password">
</span>
<span id="execution-results-POSTreset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTreset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTreset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTreset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTreset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTreset-password" data-method="POST"
      data-path="reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTreset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTreset-password"
                    onclick="tryItOut('POSTreset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTreset-password"
                    onclick="cancelTryOut('POSTreset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTreset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTreset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTreset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="POSTreset-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTreset-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETuser-confirm-password">Show the confirm password view.</h2>

<p>
</p>



<span id="example-requests-GETuser-confirm-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/confirm-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/confirm-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser-confirm-password">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjRYSnp2RHVOTHpZNFE1SnJsNUtab1E9PSIsInZhbHVlIjoia2xlSlNKV2xWbzVndFpVZ3FjUE1pZXZQWitSa0lpMkJPeVEyeEx1MFJQWFVNMVRxME9TOTRMUFhET3IxQW9lRTNPL1pvV0NsRVVHcnBML3F4M0Z3eHUvcEI3SmZpVnlmWDNBQm1VRHc3WDVvTE9JaUU5WmFOTVRnRyt6QmREY3UiLCJtYWMiOiJjZThlMTFlYWU1ZjMxN2ZlMGJmNmQwZTk5MzVmZWJhNDY5Yzc5MGM3YjFiOWY4ZDFkMjc1MmRkM2QxNGIxNzRhIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjNsWVNEVVN2Qlh4N2wvVHNIK3FxK1E9PSIsInZhbHVlIjoicndGK3dqQnlYNXJZVmdoempreUpkalIvNGRBYXk0dDB3OUxyc1UvZHpQUlBrZGhTRTBVb0R0YmRnbTFUdDdxcWF4S0pFMzlsbm5PMFJIT2tEVUI0cmJlSXljYytoeW82a0l4T1VKQk5JcGRVb0FqZGtXb1l1YjkxblY3OWlyTVciLCJtYWMiOiIzZjYwYTliZDBhMDU1ZWY0MGY3MzM2NTAzMGI4OTM4YTUxZDU5NjRhMjg4MmMyNTYzMTc5N2ZlYjNlMDY2Y2QwIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser-confirm-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser-confirm-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-confirm-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETuser-confirm-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-confirm-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETuser-confirm-password" data-method="GET"
      data-path="user/confirm-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser-confirm-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser-confirm-password"
                    onclick="tryItOut('GETuser-confirm-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser-confirm-password"
                    onclick="cancelTryOut('GETuser-confirm-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser-confirm-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/confirm-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETuser-confirm-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETuser-confirm-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETuser-confirmed-password-status">Get the password confirmation status.</h2>

<p>
</p>



<span id="example-requests-GETuser-confirmed-password-status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/confirmed-password-status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/confirmed-password-status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser-confirmed-password-status">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6Ink5cmFHWit5MkxpSThSYy9welcweHc9PSIsInZhbHVlIjoiVE9nNngyUTZ3cFZZL24vUE1ONGROUFBxUjEvTW92ZWx1M2IybFlHcUhCa3hZS0RQb2JsUG1Dc0xaYWpJR3FXcGxmM1V0K3I4cUw2STFnN3BvUmR1REJLby8vTTdUcWtHS2ptUVpYU2NYV3RuWndLRVVqNUE4a201aW5PaU44Z2oiLCJtYWMiOiJjNmNiMDAzNjc3YjZlNGEzNTcwY2I0ODliMDhkOWM2ZGM4ZTNhNmUwNzQ2YmQ2YTY2ZjM3MmRjZTFkOTY1NzAxIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlZjdlRKV0J4RHl2cUVYRGRGUWRueGc9PSIsInZhbHVlIjoiWmZEanJVQ1Y4SlZrVmN5ZWZUR1ZiRjRhVGUwRnRZT3NyanJUQ3FTbFhyMnNVM2hoSjZSbGJySDM1WVJRVGVxLzFmUVFUSnhQK2xaekM2QUE0dThORU9SdFNkK2Q2elRBTUVZTDRWaEgvOXpNT2h1Wkhzc2g1cmo1cWp1d2hvd20iLCJtYWMiOiIxMzdkNjZkNjU1NDkwN2EyZGViYzU1YTI4YTc0OTIzNzk3MTc4N2IzYzRlYTU5ZTgyZDc5ZDQ3ZjJiYzJiZWQ4IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:39 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser-confirmed-password-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser-confirmed-password-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-confirmed-password-status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETuser-confirmed-password-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-confirmed-password-status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETuser-confirmed-password-status" data-method="GET"
      data-path="user/confirmed-password-status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser-confirmed-password-status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser-confirmed-password-status"
                    onclick="tryItOut('GETuser-confirmed-password-status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser-confirmed-password-status"
                    onclick="cancelTryOut('GETuser-confirmed-password-status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser-confirmed-password-status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/confirmed-password-status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETuser-confirmed-password-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETuser-confirmed-password-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTuser-confirm-password">Confirm the user&#039;s password.</h2>

<p>
</p>



<span id="example-requests-POSTuser-confirm-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/confirm-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/confirm-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser-confirm-password">
</span>
<span id="execution-results-POSTuser-confirm-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser-confirm-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-confirm-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTuser-confirm-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-confirm-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTuser-confirm-password" data-method="POST"
      data-path="user/confirm-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser-confirm-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser-confirm-password"
                    onclick="tryItOut('POSTuser-confirm-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser-confirm-password"
                    onclick="cancelTryOut('POSTuser-confirm-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser-confirm-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/confirm-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTuser-confirm-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTuser-confirm-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</h2>

<p>
</p>



<span id="example-requests-GETsanctum-csrf-cookie">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/sanctum/csrf-cookie" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETsanctum-csrf-cookie">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IkJEL25KY0RlYXJhTDlvek1SN3U1V3c9PSIsInZhbHVlIjoieDVMME5yME1DOUg0eEt0cllkelA0Y0RIenZuaDBvT1psL2hZNUVlejFEZExweDJ1aDhITFJCK1p1QTgwcUpDN2poQXFidHFySEVDbmhMR3FoOXU1ZVIramgzMDhXeTRnaE9SZFEyaWd5RURUaXRtK0U3dlAvWGJsS2VGK2FnNEciLCJtYWMiOiIxZTNlNGYzN2ZiMDZkZTNlZDE2NTNmZWQ5Zjg4ODQ2ZTMyNDYxMTA2ZTcxYjA0NDcyNGFlYjkyN2NhMGQyZjJhIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InY2a2IydWE1TG9QQUNkMGQrM3NoeGc9PSIsInZhbHVlIjoiTVBFb2tPMzhBRUE1SmNEWmprVHVjUzJvT2Z0MmM0T1RVSVZYR3IyTVNFaFdvRmorR1ZRUHVGN08xRjJSVTRHRCthNnFxeHhHNEs3eFV6enRvSWZpNkgyd0kxRDAwQ0taVEIzcHVrT2dneG9oMitVQUZ3dEZPTzE5YnBKTTIzaTIiLCJtYWMiOiI5YjU3NzhlNDdiMzAyN2QzMTY1NjdkZGQ0MDgwYzM4ZDYzOTkyMjhjOGQ3ZTcyYWUwOGM5YmVjYTNkMDY5ZTg0IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>
<code>Empty response</code>
 </pre>
    </span>
<span id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETsanctum-csrf-cookie"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETsanctum-csrf-cookie" data-method="GET"
      data-path="sanctum/csrf-cookie"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETsanctum-csrf-cookie"
                    onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETsanctum-csrf-cookie"
                    onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETsanctum-csrf-cookie"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>sanctum/csrf-cookie</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETsanctum-csrf-cookie"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETsanctum-csrf-cookie"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETregister">GET register</h2>

<p>
</p>



<span id="example-requests-GETregister">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETregister">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6InZPRUg0S3pUWnN4cVhhTitnT0k2Ymc9PSIsInZhbHVlIjoibERRS3h1aXQ4ZTJENGFLQVViT1RTWHdqTllBUlR1bm9GMS9zaDBxQTNCekpTalZ0RnZvbEh1VVQyeWxvUGJ6T2kyQmRHNmVqdTV0RERqbnd4Y0R0Qkhob2t6RmQzcFhTTnYxd3RnUlNRY3djdjVwRWVXdEVqazFxRklrSklQdGoiLCJtYWMiOiIwZGYyNzk2ZWM3MzEzNTE3ZWYzNmRjMmFmNzI0ZTcwNTJlOGRiODc2OWQ5OGZiZjAzOGJiNmEwN2I2MGRmZGU0IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InlGWW5TRys1NXhPdkMvVTNxVVVTeVE9PSIsInZhbHVlIjoiRGoxZktyaHowdmRSMGxaSTZtYmlCYUhpb1hDUXRjcERrRzRlaEMwLzRkYnkwVXdpQUJGZkNwTHhacmRFWm1sMzV3TDRIUG9PY3pCSVhWS00za20xVDZTb0pGWFBVeTI0MzM2ZWFEN1g1VEJibU4xU3dQbVdPeTRGMURRU3FCZ0IiLCJtYWMiOiIyNWU4MjBiZjE2ODZmYzlmNTEyMTg1MDNmMDVjNThlZmRiMTA5ZjdjY2NiOTM5YzY1MDdiODNkMWI1OWMzOTJiIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;title&gt;Viking Transmo - register&lt;/title&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
    &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

    &lt;!-- Bootstrap --&gt;
    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Custom CSS --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/css/app.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;

    
    &lt;!-- Bootstrap 5.3.2 --&gt;
&lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;

&lt;nav class=&quot;navbar navbar-expand-lg navbar-light bg-light&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;a class=&quot;navbar-brand d-flex align-items-center&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;http://localhost/viking.jpg&quot; alt=&quot;Viking Logo&quot; style=&quot;height: 40px; margin-right: 10px;&quot;&gt;
            Viking Violet
        &lt;/a&gt;
        &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarSupportedContent&quot; 
                aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
            &lt;ul class=&quot;navbar-nav me-auto mb-2 mb-lg-0&quot;&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost&quot;&gt;Home&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost/a-propos&quot;&gt;About&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;

            &lt;div class=&quot;btn-group&quot;&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                Connexion
                &lt;/button&gt;
                    &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt; &lt;!-- Ajout de dropdown-menu-end --&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            
                
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;

&lt;!-- Script pour forcer l&#039;initialisation des dropdowns si n&eacute;cessaire --&gt;
&lt;script&gt;
    document.addEventListener(&quot;DOMContentLoaded&quot;, function() {
        var dropdownElementList = [].slice.call(document.querySelectorAll(&#039;.dropdown-toggle&#039;))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
    });
&lt;/script&gt;
    
    &lt;main class=&quot;container py-4&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
        &lt;h1 class=&quot;text-center text-muted mb-3 mt-5&quot;&gt;Cr&eacute;ation de compte&lt;/h1&gt;
        &lt;p class=&quot;text-center text-muted mb-5&quot;&gt;Cr&eacute;ez un compte si vous n&#039;en avez pas.&lt;/p&gt;

                
        &lt;form action=&quot;http://localhost/register&quot; method=&quot;POST&quot; id=&quot;form-register&quot; novalidate&gt;
            &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;XTQRzbxzsmqQXTSVGvlaaAq8sODIf0ygebY8Hqa4&quot; autocomplete=&quot;off&quot;&gt;
            &lt;!-- Nom d&#039;utilisateur --&gt;
            &lt;div class=&quot;col-md-6 mx-auto&quot;&gt;
                &lt;label for=&quot;inputUsername&quot; class=&quot;form-label&quot;&gt;Nom d&#039;utilisateur&lt;/label&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control &quot; id=&quot;inputUsername&quot; name=&quot;Username&quot; required value=&quot;&quot;&gt;
                            &lt;/div&gt;

            &lt;!-- Email --&gt;
            &lt;div class=&quot;col-md-6 mx-auto mt-3&quot;&gt;
                &lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control &quot; id=&quot;inputEmail4&quot; name=&quot;email&quot; required autocomplete=&quot;email&quot; value=&quot;&quot;
                data-url-exist-email=&quot;http://localhost/existEmail&quot; data-token=&quot;XTQRzbxzsmqQXTSVGvlaaAq8sODIf0ygebY8Hqa4&quot;&gt;
                            &lt;/div&gt;

            &lt;!-- Mot de passe --&gt;
            &lt;div class=&quot;col-md-6 mx-auto mt-3&quot;&gt;
                &lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Mot de passe&lt;/label&gt;
                &lt;input type=&quot;password&quot; class=&quot;form-control &quot; id=&quot;inputPassword4&quot; name=&quot;password&quot; required autocomplete=&quot;new-password&quot;&gt;
                            &lt;/div&gt;

            &lt;!-- Confirmation du mot de passe --&gt;
            &lt;div class=&quot;col-md-6 mx-auto mt-3&quot;&gt;
                &lt;label for=&quot;inputPasswordConfirmation&quot; class=&quot;form-label&quot;&gt;Confirmez le mot de passe&lt;/label&gt;
                &lt;input type=&quot;password&quot; class=&quot;form-control &quot; id=&quot;inputPasswordConfirmation&quot; name=&quot;password_confirmation&quot; required autocomplete=&quot;new-password&quot;&gt;
                            &lt;/div&gt;

            &lt;!-- Checkbox des conditions --&gt;
            &lt;div class=&quot;col-md-6 mx-auto mt-3&quot;&gt;
                &lt;div class=&quot;form-check&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;terms&quot; name=&quot;terms&quot; required&gt;
                    &lt;label class=&quot;form-check-label&quot; for=&quot;terms&quot;&gt;
                        J&#039;accepte les &lt;a href=&quot;#&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#termsModal&quot;&gt;termes d&#039;utilisation&lt;/a&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- Bouton d&#039;inscription --&gt;
            &lt;div class=&quot;col-md-6 mx-auto mt-3&quot;&gt;
                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary w-100&quot; onclick=&quot;console.log(&#039;Form submitted&#039;)&quot;&gt;Cr&eacute;er un compte&lt;/button&gt;
            &lt;/div&gt;

            &lt;!-- Lien vers la connexion --&gt;
            &lt;div class=&quot;col-md-6 mx-auto mt-3 text-center&quot;&gt;
                &lt;p class=&quot;text-muted&quot;&gt;J&#039;ai d&eacute;j&agrave; un compte ? &lt;a href=&quot;http://localhost/login&quot;&gt;Se connecter&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;

    &lt;!-- Modal des termes d&#039;utilisation --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;termsModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;termsModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
        &lt;div class=&quot;modal-dialog&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title&quot; id=&quot;termsModalLabel&quot;&gt;Termes d&#039;utilisation&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body text-center&quot;&gt;
                    &lt;p&gt;Les termes d&#039;utilisation incluent les r&egrave;gles et les politiques que vous devez suivre pour utiliser ce site.&lt;/p&gt;
                    &lt;img src=&quot;http://localhost/jdg-joueur-du-grenier.gif&quot; alt=&quot;GIF anim&eacute;&quot; class=&quot;img-fluid&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Fermer&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/main&gt;

    
    &lt;footer class=&quot;bg-light text-center py-3 mt-5 border-top&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;p class=&quot;mb-1&quot;&gt;&copy; 2025 Viking Violet. Tous droits r&eacute;serv&eacute;s.&lt;/p&gt;
        &lt;a href=&quot;http://localhost/mentions-legales&quot; class=&quot;text-decoration-none text-muted&quot;&gt;Mentions l&eacute;gales&lt;/a&gt;
    &lt;/div&gt;
&lt;/footer&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://localhost/assets/js/app.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/lib/jquery/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/main/user/user.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;http://localhost/assets/main/user/user.js&quot; type=&quot;module&quot;&gt;&lt;/script&gt;
    &lt;script&gt;
        document.addEventListener(&#039;DOMContentLoaded&#039;, function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll(&#039;[data-bs-toggle=&quot;tooltip&quot;]&#039;));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    &lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETregister" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETregister"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETregister"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregister">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETregister" data-method="GET"
      data-path="register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETregister"
                    onclick="tryItOut('GETregister');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETregister"
                    onclick="cancelTryOut('GETregister');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETregister"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETregister"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETregister"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTregister">POST register</h2>

<p>
</p>



<span id="example-requests-POSTregister">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"Username\": \"zmi\",
    \"email\": \"okon.justina@example.com\",
    \"password\": \"6\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "Username": "zmi",
    "email": "okon.justina@example.com",
    "password": "6"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTregister">
</span>
<span id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTregister"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTregister" data-method="POST"
      data-path="register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTregister"
                    onclick="tryItOut('POSTregister');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTregister"
                    onclick="cancelTryOut('POSTregister');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTregister"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTregister"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTregister"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Username"                data-endpoint="POSTregister"
               value="zmi"
               data-component="body">
    <br>
<p>Must match the regex /^[a-zA-Z]+$/. Example: <code>zmi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTregister"
               value="okon.justina@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>okon.justina@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTregister"
               value="6"
               data-component="body">
    <br>
<p>Must be at least 12 characters. Must match the regex /[A-Z]/. Must match the regex /[a-z]/. Must match the regex /[0-9]/. Example: <code>6</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTexistEmail">POST existEmail</h2>

<p>
</p>



<span id="example-requests-POSTexistEmail">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/existEmail" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/existEmail"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTexistEmail">
</span>
<span id="execution-results-POSTexistEmail" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTexistEmail"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTexistEmail"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTexistEmail" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTexistEmail">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTexistEmail" data-method="POST"
      data-path="existEmail"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTexistEmail', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTexistEmail"
                    onclick="tryItOut('POSTexistEmail');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTexistEmail"
                    onclick="cancelTryOut('POSTexistEmail');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTexistEmail"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>existEmail</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTexistEmail"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTexistEmail"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETbuilds">Affiche la liste des builds de l&#039;utilisateur connecté.</h2>

<p>
</p>



<span id="example-requests-GETbuilds">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/builds" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/builds"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETbuilds">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjRyNE1nbmtHUWJNVFRPaVJTcFFLeEE9PSIsInZhbHVlIjoibnVITWErY3ArTEUvbEI2Q3N4UG1wNWJ3YXduek0yUkJyUDNXMmpoeUhERGZSRGptOVcvTFRTVnpiSXA0K2xkd2ppWG81ZUhlOWdES1JMd3lzSTJtbWUvR2YrWHBQbzBENGRLWDM1c0ZNSjhxb1JodEIvc0tVVXcvVWJhUFRoNG4iLCJtYWMiOiIyOTQ4NjQ0YjlhODg4ZDQ3Mjg4OGNhNjRmZWQyMzAwYzBhMjkwMmJhNjQ0MDM0YmM4ZDQxZGY4MjE0ZGVjZjg4IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImZiaFJuS2hmV1pVaU11YXRNQjdtN0E9PSIsInZhbHVlIjoibFhkVHlZYTZTbGJPa1RrblZhOHFrN3RkQmx3aWRFaEdjRFI1Rm4zQ09CVVlLcDhRT01qR0NmaS9ZY2EySi9lb1ZtNXpRNTBmVjRiSG9rNzFZT1FFamN1MjBYSG56bkcyQVVlUG14bldnKzhDY28raXVmak5VbWtZbVNhVm9DbXoiLCJtYWMiOiIxY2Y2MWFlZDNmMTdlM2NhMzc1ZDVjNzBjYjkyYTIzODNkNTc4NzNjY2UxMTVjODgwNzQwMzljNmUwNTZhNDFhIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETbuilds" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETbuilds"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETbuilds"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETbuilds" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbuilds">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETbuilds" data-method="GET"
      data-path="builds"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETbuilds', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETbuilds"
                    onclick="tryItOut('GETbuilds');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETbuilds"
                    onclick="cancelTryOut('GETbuilds');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETbuilds"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>builds</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETbuilds"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETbuilds"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETbuilds-create">Affiche le formulaire de création d&#039;un nouveau build.</h2>

<p>
</p>



<span id="example-requests-GETbuilds-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/builds/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/builds/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETbuilds-create">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6ImtOa3JkZU5KNFY3bmVFbFBGY1VOTUE9PSIsInZhbHVlIjoiSFIyeitZQVIzcUJhVWZlYXVTVDh5cWNqa2VPVi80QW41dlN4djJVQ3p4aTBGN1RoaUhYUTJ5VGNxNFByMzhyVnFqRjVDbVBkUlh6bFVYQ2JxK3lYaWpXU1gwWUphdWVNaTVkU3MvU0FsSUMxRHRub1R3ZlFadVZvczVwd3pGd2kiLCJtYWMiOiJjYTRhMGEzNzY5OWIyM2YyYWU3MDIwY2IwZTk2MDQ0OTQ2NzIyMzA3YWYyZjU0YjI3YjcxZjk4MTEzNzY1MmM1IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlB0eXN5bVMxbFg2QkN4YXlONEVYVFE9PSIsInZhbHVlIjoieDN0ODFRdWQ2bWxjMUo4QitYUDROYnVFRU9QS3BqMFlVS2h2MlNpWUlwano0SkJLNVBhTGo1aGVCbmRNN3JoWkVVZUw3U2ppbVBHQm5BaEpxRDVaQXhFckw3U1Y5eDhnem90ZmdmUHdwYUtTa2xlWE5qRWdZbzQxWDFOcjJJdjciLCJtYWMiOiJmMGVkMTdjMjhkMmNiYTEwZWY4Y2U5MGVlZTE1OTEwNmEzMzYyNjlmYzg5YTMyMTc1OTg1OWE2Y2QxYmMyNTZmIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETbuilds-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETbuilds-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETbuilds-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETbuilds-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbuilds-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETbuilds-create" data-method="GET"
      data-path="builds/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETbuilds-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETbuilds-create"
                    onclick="tryItOut('GETbuilds-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETbuilds-create"
                    onclick="cancelTryOut('GETbuilds-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETbuilds-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>builds/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETbuilds-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETbuilds-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTbuilds">Enregistre un nouveau build en base de données.</h2>

<p>
</p>



<span id="example-requests-POSTbuilds">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/builds" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "sujet=b"\
    --form "description=Eius et animi quos velit et."\
    --form "is_public="\
    --form "image=@C:\Users\berna\AppData\Local\Temp\phpA250.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/builds"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('sujet', 'b');
body.append('description', 'Eius et animi quos velit et.');
body.append('is_public', '');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTbuilds">
</span>
<span id="execution-results-POSTbuilds" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTbuilds"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTbuilds"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTbuilds" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTbuilds">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTbuilds" data-method="POST"
      data-path="builds"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTbuilds', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTbuilds"
                    onclick="tryItOut('POSTbuilds');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTbuilds"
                    onclick="cancelTryOut('POSTbuilds');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTbuilds"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>builds</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTbuilds"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTbuilds"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sujet</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="sujet"                data-endpoint="POSTbuilds"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTbuilds"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTbuilds"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\berna\AppData\Local\Temp\phpA250.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_public</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTbuilds" style="display: none">
            <input type="radio" name="is_public"
                   value="true"
                   data-endpoint="POSTbuilds"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTbuilds" style="display: none">
            <input type="radio" name="is_public"
                   value="false"
                   data-endpoint="POSTbuilds"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETbuilds--id-">Affiche un build spécifique.</h2>

<p>
</p>



<span id="example-requests-GETbuilds--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/builds/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/builds/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETbuilds--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6ImpaeURpdmNXaERYUzg2Qm1CZSs0OGc9PSIsInZhbHVlIjoic2cxRHR1WDBjSERTTWduNk5ZTmZwUGcrczZIMHJSMGJkYnFBK3dpenZQMmJWSUwvMXd6WkZDOHJDanEyR1c5eDgwYjd2dnhwZmVQVFJrNkpaU1NTY2orYllzY3JCSGM5ZDhHU1h3aVdDeDdBTlZxNkJOYzBpOWZWNDFmem1QRUQiLCJtYWMiOiI1ZDllZGFkYzc2MmJmN2U0MjRjZDMyOTI5MWNkZjc5YjMyYzg4OGExYzFhNDcxMGZjOTY4NzU5NDQ1YTNhZmJhIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IktOKy9reXZScUZxSFdLWHkwUkRtY0E9PSIsInZhbHVlIjoiMlZRRWtQWThhMUJtTFBFT0owdDFxd0dsL0Q0MjZZS1phbGpTSG1WQkJueExQOTYzWERDZERoaGNxcHZZcXJMUTdqTkphU3I3bmJGeTY4ZjhFQ3hJem5VbDF2Z1ZmQzFUMmJybkFNcjk2VGlXVTF5WGVOQzl1aFIwYS82eEdQV20iLCJtYWMiOiJmOTRlZTgzNzZjNWJiOGJkMTJmNzFkOTZmMTk1Njk3MDI3ZTkyOTBhZjdkOGE2YmRiYjhmODAzNTE3ZjU1YjVlIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETbuilds--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETbuilds--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETbuilds--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETbuilds--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbuilds--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETbuilds--id-" data-method="GET"
      data-path="builds/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETbuilds--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETbuilds--id-"
                    onclick="tryItOut('GETbuilds--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETbuilds--id-"
                    onclick="cancelTryOut('GETbuilds--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETbuilds--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>builds/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETbuilds--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETbuilds--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETbuilds--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the build. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETbuilds--build_id--edit">Affiche le formulaire d&#039;édition d’un build.</h2>

<p>
</p>



<span id="example-requests-GETbuilds--build_id--edit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/builds/1/edit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/builds/1/edit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETbuilds--build_id--edit">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6Ik1XWkZFYUMwYk1POFZJcDZYZFdWbnc9PSIsInZhbHVlIjoiZXpoSTJFZ21uTUh1SVFpb2VpdTFOUVQzazN6ekErNjZWUFhqcmxiMWVDc1h2MjN3REp1ZnNOS3VZU3p4VCs3a0lYWVlnRmM3aUNXeHRkZ0dvT3BtSGlNWHhkS1R6TWdRQ2xIeTN3QW9PbjlDZHBJa0tBUjh2Q3dESW1mL0hqVjEiLCJtYWMiOiI4MDNlMmQ3ODBjNTNjYzk4YjFiYzFkMjE0YzA2Mzg2Njg4ZDc4ZWQxNWUwMDliYjlkZDI4MmY1YjQzNDE4MTFiIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImUvUVdQMjg2NUNOaVR3RnV3Tk13dEE9PSIsInZhbHVlIjoiK1Nod0t3eFdPSUI0bm9sYklsUFJRVEVLS1lLZWxyd0FOSTdJRTY1NXhucG5YOWYyYmI4Q3RQTG5lRE5vN0NmMEUzWGZ3L0F2bW9TUGdndEdVSC9MZWtJaURCblFEaWI3aElkaHNjTHpXSG1YcnlIbzVxdDQ5Nk5obXpLL3pvWE8iLCJtYWMiOiI2YTBjZjcyNTkxYTEzN2Y2YjMxYWM4M2I0ZTUzZGMzNjhmZjBiNzM0MzFkMDYzZjc4NDIwY2I1ZmVlMDgwOTI4IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETbuilds--build_id--edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETbuilds--build_id--edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETbuilds--build_id--edit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETbuilds--build_id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETbuilds--build_id--edit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETbuilds--build_id--edit" data-method="GET"
      data-path="builds/{build_id}/edit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETbuilds--build_id--edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETbuilds--build_id--edit"
                    onclick="tryItOut('GETbuilds--build_id--edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETbuilds--build_id--edit"
                    onclick="cancelTryOut('GETbuilds--build_id--edit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETbuilds--build_id--edit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>builds/{build_id}/edit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETbuilds--build_id--edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETbuilds--build_id--edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>build_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="build_id"                data-endpoint="GETbuilds--build_id--edit"
               value="1"
               data-component="url">
    <br>
<p>The ID of the build. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTbuilds--id-">Met à jour un build existant.</h2>

<p>
</p>



<span id="example-requests-PUTbuilds--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/builds/1" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "sujet=b"\
    --form "description=Eius et animi quos velit et."\
    --form "is_public="\
    --form "image=@C:\Users\berna\AppData\Local\Temp\phpA270.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/builds/1"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('sujet', 'b');
body.append('description', 'Eius et animi quos velit et.');
body.append('is_public', '');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTbuilds--id-">
</span>
<span id="execution-results-PUTbuilds--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTbuilds--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTbuilds--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTbuilds--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTbuilds--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTbuilds--id-" data-method="PUT"
      data-path="builds/{id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTbuilds--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTbuilds--id-"
                    onclick="tryItOut('PUTbuilds--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTbuilds--id-"
                    onclick="cancelTryOut('PUTbuilds--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTbuilds--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>builds/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>builds/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTbuilds--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTbuilds--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTbuilds--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the build. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sujet</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="sujet"                data-endpoint="PUTbuilds--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTbuilds--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="PUTbuilds--id-"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\berna\AppData\Local\Temp\phpA270.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_public</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTbuilds--id-" style="display: none">
            <input type="radio" name="is_public"
                   value="true"
                   data-endpoint="PUTbuilds--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTbuilds--id-" style="display: none">
            <input type="radio" name="is_public"
                   value="false"
                   data-endpoint="PUTbuilds--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETmentions-legales">Invoke the controller method.</h2>

<p>
</p>



<span id="example-requests-GETmentions-legales">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/mentions-legales" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/mentions-legales"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETmentions-legales">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IkRlZ1lIdDZ0Z0FIdU9iSGxJWUo2K3c9PSIsInZhbHVlIjoiNGgyTVRBeUFPMU9YVk8xazgzSmFKcFMxb1Z4UjBaOUhmcEx1dFJxQlFtRkc3eFdha0lyOHhQcFZjNG9jbHhnVVBoNEV2ZG9XL2NhZUVCOFFMWnJUYlhrT2JOb21vVXUwVVZzd3Y3cFhuRmY5MVFlRUlLLzJPUHZzNVJGUE1Dc0wiLCJtYWMiOiIyMDJiODhiODlmMjIzOWMxOGY4OGYxZjk5YzMxYTI1ZjMzNjc5NTBlZTM3NDE1N2VlZGQ3M2UyZWRkNmM2ZWQyIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImEveDB1Vnd1UEZRUlQ3QTM1SEc2cnc9PSIsInZhbHVlIjoiZlpNSXF2cjJtWEtSUGlDUmxSVUlIbkJUc2pYRlhSWUZpZnZlRVh4NzdhYnk3WmUwWVRQWksxVWQzUmxlZDRWZWMzNkF1MDBudnNpR3FCOUxLbDQxZjJtaW9WMTg4WDR3amRiYkhhRE45RzNTYlg2Y1NiNWdBT1BmalNubndWVnQiLCJtYWMiOiI0MmM3NWQ1MTJlZjI4MGZlMzVlOTEwMWE3YjdmYWI3YjFkZDBlNGEzNTFiZGRkODZiNDI4MGM3ODg3ZjYyNTVlIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;title&gt;Viking Transmo - Mentions l&eacute;gales&lt;/title&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
    &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

    &lt;!-- Bootstrap --&gt;
    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Custom CSS --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/css/app.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;

    
    &lt;!-- Bootstrap 5.3.2 --&gt;
&lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;

&lt;nav class=&quot;navbar navbar-expand-lg navbar-light bg-light&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;a class=&quot;navbar-brand d-flex align-items-center&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;http://localhost/viking.jpg&quot; alt=&quot;Viking Logo&quot; style=&quot;height: 40px; margin-right: 10px;&quot;&gt;
            Viking Violet
        &lt;/a&gt;
        &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarSupportedContent&quot; 
                aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
            &lt;ul class=&quot;navbar-nav me-auto mb-2 mb-lg-0&quot;&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost&quot;&gt;Home&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost/a-propos&quot;&gt;About&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;

            &lt;div class=&quot;btn-group&quot;&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                Connexion
                &lt;/button&gt;
                    &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt; &lt;!-- Ajout de dropdown-menu-end --&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            
                
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;

&lt;!-- Script pour forcer l&#039;initialisation des dropdowns si n&eacute;cessaire --&gt;
&lt;script&gt;
    document.addEventListener(&quot;DOMContentLoaded&quot;, function() {
        var dropdownElementList = [].slice.call(document.querySelectorAll(&#039;.dropdown-toggle&#039;))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
    });
&lt;/script&gt;
    
    &lt;main class=&quot;container py-4&quot;&gt;
        &lt;div class=&quot;container mt-5&quot;&gt;
    
    &lt;h1 class=&quot;mb-4&quot;&gt;Mentions l&eacute;gales&lt;/h1&gt;

    
    &lt;p&gt;&lt;strong&gt;Nom du site :&lt;/strong&gt; Viking Violet - Hall de la Mode&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;Responsable de la publication :&lt;/strong&gt; L&#039;&eacute;quipe Viking Violet&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;H&eacute;bergement :&lt;/strong&gt; H&eacute;berg&eacute; par votre fournisseur ou votre serveur&lt;/p&gt;

    
    &lt;h3&gt;Propri&eacute;t&eacute; intellectuelle&lt;/h3&gt;
    &lt;p&gt;Le contenu de ce site (textes, images, code, etc.) est prot&eacute;g&eacute; par le droit d&rsquo;auteur. Toute reproduction non autoris&eacute;e est interdite.&lt;/p&gt;

    
    &lt;h3&gt;Utilisation des donn&eacute;es&lt;/h3&gt;
    &lt;p&gt;Les donn&eacute;es personnelles &eacute;ventuellement collect&eacute;es sont uniquement utilis&eacute;es dans le cadre du fonctionnement de l&#039;application (connexion, builds, etc.).&lt;/p&gt;

    
    &lt;h3&gt;Cookies&lt;/h3&gt;
    &lt;p&gt;Ce site peut utiliser des cookies &agrave; des fins de fonctionnement ou de mesure d&rsquo;audience.&lt;/p&gt;

    
    &lt;h3&gt;Contact&lt;/h3&gt;
    &lt;p&gt;Pour toute question ou r&eacute;clamation, merci de nous contacter via la page de contact ou &agrave; l&#039;adresse e-mail suivante : contact@vikingviolet.com&lt;/p&gt;
&lt;/div&gt;
    &lt;/main&gt;

    
    &lt;footer class=&quot;bg-light text-center py-3 mt-5 border-top&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;p class=&quot;mb-1&quot;&gt;&copy; 2025 Viking Violet. Tous droits r&eacute;serv&eacute;s.&lt;/p&gt;
        &lt;a href=&quot;http://localhost/mentions-legales&quot; class=&quot;text-decoration-none text-muted&quot;&gt;Mentions l&eacute;gales&lt;/a&gt;
    &lt;/div&gt;
&lt;/footer&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://localhost/assets/js/app.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/lib/jquery/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/main/user/user.js&quot;&gt;&lt;/script&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETmentions-legales" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETmentions-legales"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETmentions-legales"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETmentions-legales" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmentions-legales">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETmentions-legales" data-method="GET"
      data-path="mentions-legales"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETmentions-legales', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETmentions-legales"
                    onclick="tryItOut('GETmentions-legales');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETmentions-legales"
                    onclick="cancelTryOut('GETmentions-legales');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETmentions-legales"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>mentions-legales</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETmentions-legales"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETmentions-legales"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="pages-publiques">Pages publiques</h1>

    

                                <h2 id="pages-publiques-GET-">Affiche la page d&#039;accueil avec les builds publics.</h2>

<p>
</p>



<span id="example-requests-GET-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;publicBuilds&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;sujet&quot;: &quot;Exemple de build&quot;,
            &quot;description&quot;: &quot;Description du build&quot;,
            &quot;is_public&quot;: true
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GET-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET-" data-method="GET"
      data-path="/"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET-"
                    onclick="tryItOut('GET-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET-"
                    onclick="cancelTryOut('GET-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>/</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GET-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GET-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="pages-publiques-GETa-propos">Affiche la page &quot;À propos&quot;.</h2>

<p>
</p>



<span id="example-requests-GETa-propos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/a-propos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/a-propos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETa-propos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IktZcUlPakV3VzVxZ1p4R0J3dXBxWWc9PSIsInZhbHVlIjoidWlGWVRyY2NteDNUQVV1MDBiaWdiUUFPTC9Uc1liVGt6L0MyTU9ORXB3ZUhJdzlGL0lBd0pzUGRxak5RL0RQeHdpUnE5N25wMDJlN2dTMjJpRW1tb29MVVJGTUMrSTNDRE9HZUpzcWo5T2Yxa0JIaEhjUnhrM2xJVy9ldW1oY0QiLCJtYWMiOiIzNjQyOTgxMDAxYzI3M2Y1ZTczZmNjMzM1MjIyMzNkYTkwMGVmMmY3MzU0MmY1Y2I0YTk5M2JlNmViZDQ1MzgxIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Im0rQWxHWVJzcCttRm5qcTM3NVlkTVE9PSIsInZhbHVlIjoicTRSbno5NkRjSnNoblhNMjNMT0h0NFl4WUJ2LzF2MjZWNDhCdzJOcGQrSUpyRVJ2RmFraUxxaVNwSjkxWHNRUDFtL2cyd29qNWRGK3llQlBocjVKb0pJUFdpVVRheGUzWmcvUVg3UUcrcWRmU3ZrbWV5NzM1ZE95RW9DbWNzTDEiLCJtYWMiOiIwNDBiMjk2MGFkZjFmNWQyMWEyMmEyMzQyYjNmY2I5MDI2NDU3ODZkMmVlYTRmZjZiNzk0ZTAyYjJhOGMyYTYzIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;title&gt;Viking Transmo - &Agrave; propos&lt;/title&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
    &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

    &lt;!-- Bootstrap --&gt;
    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Custom CSS --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/css/app.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;

    
    &lt;!-- Bootstrap 5.3.2 --&gt;
&lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;

&lt;nav class=&quot;navbar navbar-expand-lg navbar-light bg-light&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;a class=&quot;navbar-brand d-flex align-items-center&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;http://localhost/viking.jpg&quot; alt=&quot;Viking Logo&quot; style=&quot;height: 40px; margin-right: 10px;&quot;&gt;
            Viking Violet
        &lt;/a&gt;
        &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarSupportedContent&quot; 
                aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
            &lt;ul class=&quot;navbar-nav me-auto mb-2 mb-lg-0&quot;&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost&quot;&gt;Home&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link  active &quot; 
                       aria-current=&quot;page&quot; href=&quot;http://localhost/a-propos&quot;&gt;About&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;

            &lt;div class=&quot;btn-group&quot;&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                Connexion
                &lt;/button&gt;
                    &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt; &lt;!-- Ajout de dropdown-menu-end --&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            
                
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;

&lt;!-- Script pour forcer l&#039;initialisation des dropdowns si n&eacute;cessaire --&gt;
&lt;script&gt;
    document.addEventListener(&quot;DOMContentLoaded&quot;, function() {
        var dropdownElementList = [].slice.call(document.querySelectorAll(&#039;.dropdown-toggle&#039;))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
    });
&lt;/script&gt;
    
    &lt;main class=&quot;container py-4&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
        &lt;h1 class=&quot;text-center&quot;&gt;&Agrave; propos de World of Warcraft&lt;/h1&gt;
        &lt;p&gt;World of Warcraft est un jeu de r&ocirc;le en ligne massivement multijoueur (MMORPG) d&eacute;velopp&eacute; par Blizzard Entertainment. Dans ce jeu, les joueurs explorent le monde d&#039;Azeroth, accomplissent des qu&ecirc;tes, et interagissent avec d&#039;autres joueurs.&lt;/p&gt;
        &lt;p&gt;Ce guide vous aidera &agrave; naviguer dans les diff&eacute;rentes facettes du jeu, y compris la cr&eacute;ation de personnages, le choix des classes, et les strat&eacute;gies pour progresser efficacement.&lt;/p&gt;
        &lt;h2&gt;Cr&eacute;ation de Personnage&lt;/h2&gt;
        &lt;p&gt;Lorsque vous commencez, vous aurez la possibilit&eacute; de cr&eacute;er un personnage en choisissant une race et une classe. Chaque race a ses propres avantages et inconv&eacute;nients, et chaque classe offre des comp&eacute;tences uniques.&lt;/p&gt;
        &lt;h2&gt;Qu&ecirc;tes et Exploration&lt;/h2&gt;
        &lt;p&gt;Les qu&ecirc;tes sont essentielles pour progresser dans le jeu. Elles vous permettent de gagner de l&#039;exp&eacute;rience, de l&#039;&eacute;quipement, et de d&eacute;couvrir l&#039;histoire d&#039;Azeroth.&lt;/p&gt;
        &lt;h2&gt;Interactions avec d&#039;autres Joueurs&lt;/h2&gt;
        &lt;p&gt;World of Warcraft est &eacute;galement un jeu social. Vous pouvez rejoindre des guildes, participer &agrave; des raids, et interagir avec d&#039;autres joueurs pour accomplir des objectifs communs.&lt;/p&gt;
        &lt;h2&gt;Qu&#039;est-ce que la Transmogrification ?&lt;/h2&gt;
        &lt;p&gt;La transmogrification, ou &quot;transmo&quot;, est une fonctionnalit&eacute; de World of Warcraft introduite avec l&rsquo;extension &lt;strong&gt;Cataclysm&lt;/strong&gt;. Elle permet aux joueurs de modifier l&rsquo;apparence visuelle de leur &eacute;quipement tout en conservant ses statistiques. Gr&acirc;ce &agrave; ce syst&egrave;me, vous pouvez personnaliser votre style visuel en appliquant l&rsquo;apparence d&rsquo;un ancien objet (que vous avez d&eacute;j&agrave; obtenu) sur votre &eacute;quipement actuel. C&rsquo;est un aspect tr&egrave;s appr&eacute;ci&eacute; par les joueurs qui souhaitent afficher des ensembles th&eacute;matiques, nostalgiques ou tout simplement uniques.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/main&gt;

    
    &lt;footer class=&quot;bg-light text-center py-3 mt-5 border-top&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;p class=&quot;mb-1&quot;&gt;&copy; 2025 Viking Violet. Tous droits r&eacute;serv&eacute;s.&lt;/p&gt;
        &lt;a href=&quot;http://localhost/mentions-legales&quot; class=&quot;text-decoration-none text-muted&quot;&gt;Mentions l&eacute;gales&lt;/a&gt;
    &lt;/div&gt;
&lt;/footer&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://localhost/assets/js/app.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/lib/jquery/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://localhost/assets/main/user/user.js&quot;&gt;&lt;/script&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETa-propos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETa-propos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETa-propos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETa-propos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETa-propos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETa-propos" data-method="GET"
      data-path="a-propos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETa-propos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETa-propos"
                    onclick="tryItOut('GETa-propos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETa-propos"
                    onclick="cancelTryOut('GETa-propos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETa-propos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>a-propos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETa-propos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETa-propos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="profil-utilisateur">Profil utilisateur</h1>

    

                                <h2 id="profil-utilisateur-GETprofile">Affiche le profil de l&#039;utilisateur connecté.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETprofile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETprofile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InZYNUxucllWSG9MMTVxWVhLN0grMGc9PSIsInZhbHVlIjoiOE04eFZRc25KajVoYTc1bDJTb3hxVTBoakhhc1hzK0N0NXBEZHM5d21oa1BFWVZNKzR0UkYyaXhtZkdGdjBMZFI2TFliU2JPb3JDK2lhaTNyV1FMR1pCNkQzaTNNVWp4OStPRk51VWRPUWhwcTNiVEg1RHFlbmFwcjc0VzNCVkMiLCJtYWMiOiI2ZjIxNDVmMGU3ZWI2Y2VhZDMzZDkyOTc4YjE4NTllZGIwYjJhNWE5NWRlMzExZjA0NjM2MWY3NmZiZDQ5ZTM2IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Imh5enJIeHg0bnZpMmo3RkIrK3hycmc9PSIsInZhbHVlIjoia1BDbWhXVTI4dHJMcGMxcUZJeXhjT0hDOENYVnppUnZJdlpxTjhIS0NFRzRhQThOaHB4OWU4SHcvbGs2bVlHSTllU3U1eXFXc2FhbGdSbHVXR01ERnBuWDNSMFpMV0s2TThvdS9QcXhZMmJ4RG9SWlhGVDF1WU1UdWhyV0Z2WXgiLCJtYWMiOiI1ZmZhNWEzZjE5NWRjY2JiYzAzOWUzOWNmMDg5NWU0OTE4YjY5MDBjYjZlNDJhNDkzMWE3NTZmYmIwOWVjZTAxIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETprofile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETprofile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETprofile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETprofile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETprofile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETprofile" data-method="GET"
      data-path="profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETprofile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETprofile"
                    onclick="tryItOut('GETprofile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETprofile"
                    onclick="cancelTryOut('GETprofile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETprofile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETprofile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETprofile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="profil-utilisateur-GETprofile-edit">Affiche le formulaire d&#039;édition du profil.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETprofile-edit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/profile/edit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/profile/edit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETprofile-edit">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IlZOSkF6UGNtcnNMcnNPV0ZSN0toamc9PSIsInZhbHVlIjoiRU1CRmdqRGNzdHJlaml1K1FkeGJFVk53eDlxdVdqMElUaEZGQ3VrSFFkT0pSK0tmMEdqT3pzTTNLazhXcEx3bEkxVjFTcXVsYTV2L0lkdmFKaS9DZ3NQTGJYRmMyY3B2aWszNDVoR2lML2YrT1ZGQlNSZHNsM3NzeS9xOERlQWciLCJtYWMiOiIyMzFjMDg3YTZlYzg3ODliNTQzYWY1OWFjMDgxZDg3MTZkOGUwMjc0NmIzZmExNDI5ZTNmYTAzNTE3OThlZGI3IiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InZNcFlIaFd2Q2FUc1dCS0lXRWUvWWc9PSIsInZhbHVlIjoiTFU1eGxQbUg0dUkwQmpVSFhIU1VSTmd6b3psaXdRTDBIQzlBMWdrZkdsZ00xek5zcFJxOGRJaUdWMTZjVHdLUVExVjRoVHBWOEFkUDRoTVd5Y2FuMStFRGdKRWVvODVOR2I2QSthTFF1bXhHbnpVTEZoWWhkMm96YXRhMm0xRmQiLCJtYWMiOiJjMjhmOWE3YmViYTgzNjIyMTVjOTBmNjY2YzA3NWRjNjZjNTQ0ZmJmNzE1ZDYyOGUzYzczYThjZTk0YWRhNDFjIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETprofile-edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETprofile-edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETprofile-edit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETprofile-edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETprofile-edit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETprofile-edit" data-method="GET"
      data-path="profile/edit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETprofile-edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETprofile-edit"
                    onclick="tryItOut('GETprofile-edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETprofile-edit"
                    onclick="cancelTryOut('GETprofile-edit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETprofile-edit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>profile/edit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETprofile-edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETprofile-edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="profil-utilisateur-PUTprofile">Met à jour le profil de l&#039;utilisateur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTprofile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/profile" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=Jean Dupont"\
    --form "email=jean.dupont@example.com"\
    --form "profile_picture=@C:\Users\berna\AppData\Local\Temp\phpA272.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/profile"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'Jean Dupont');
body.append('email', 'jean.dupont@example.com');
body.append('profile_picture', document.querySelector('input[name="profile_picture"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTprofile">
</span>
<span id="execution-results-PUTprofile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTprofile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTprofile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTprofile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTprofile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTprofile" data-method="PUT"
      data-path="profile"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTprofile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTprofile"
                    onclick="tryItOut('PUTprofile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTprofile"
                    onclick="cancelTryOut('PUTprofile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTprofile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTprofile"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTprofile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTprofile"
               value="Jean Dupont"
               data-component="body">
    <br>
<p>Le nom de l'utilisateur. Example: <code>Jean Dupont</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTprofile"
               value="jean.dupont@example.com"
               data-component="body">
    <br>
<p>L'adresse email de l'utilisateur. Example: <code>jean.dupont@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_picture</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="profile_picture"                data-endpoint="PUTprofile"
               value=""
               data-component="body">
    <br>
<p>La photo de profil de l'utilisateur (optionnelle). Example: <code>C:\Users\berna\AppData\Local\Temp\phpA272.tmp</code></p>
        </div>
        </form>

                    <h2 id="profil-utilisateur-GETapp_profile">Affiche le profil de l&#039;utilisateur connecté.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapp_profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/app_profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/app_profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapp_profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IldVNlY2MVRqNEtsdS81ZktKYU1UcWc9PSIsInZhbHVlIjoiYUIzNGRJRXhqcnQ0NTBaYjdaSUJIQTVoOHZjdHd4b0xHR0xjV3h5NEVKemd4WUdBbmNjS1krbGN6M1ZSRlZhb1UxSjQwejRWY2ZpM044bWlucUJ3eGMvcXJWVFZWeVgrMDd3KzFYY0paZUdHL0JqWmlCNmkxSnZRQ3R6U3ZTNGYiLCJtYWMiOiI0Yjk0ZmJlZTZjOGNjNzczNzA2ZWRmODBjN2ZlNWY5ZGY4OWU3NmJkMzU5NzY0YzM0NWY0ZTFkNTVlOTBlODlmIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IklVRVJhV0J0ZXBvd2x5TnQrWis3S3c9PSIsInZhbHVlIjoiOGZ1SnB2UXdLd09kNXVCb3lGWlQwM0o5NXdPcWducjB3QlhoSjNpL1B5cG9sNnN6Q0xabzFKNUdmUUV3TDZiNjFEQmZScFBWZlg3c3d3bTV6MmVWcjlSSW1ZYlRwYkVpcUFZRVFtd0U5bzN5WmI1WEluQWhZK3BwcXJTYjFrWHUiLCJtYWMiOiI3MGNmODYxMGEzMTJiYzgzZjEwMTQ5NDU2NGE3OTFmZWQzOTExMTNhY2VkMTkyY2E4MWE3NDk2NTgyNzIzY2JjIiwidGFnIjoiIn0%3D; expires=Mon, 21 Apr 2025 23:15:40 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapp_profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapp_profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapp_profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapp_profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapp_profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapp_profile" data-method="GET"
      data-path="app_profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapp_profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapp_profile"
                    onclick="tryItOut('GETapp_profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapp_profile"
                    onclick="cancelTryOut('GETapp_profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapp_profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>app_profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapp_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapp_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
