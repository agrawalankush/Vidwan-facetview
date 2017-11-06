<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Articles</title>

        <script type="text/javascript" src="vendor/jquery/1.7.1/jquery-1.7.1.min.js"></script>

        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>  

        <script type="text/javascript" src="vendor/linkify/1.0/jquery.linkify-1.0-min.js"></script>  

        <link rel="stylesheet" href="vendor/jquery-ui-1.8.18.custom/jquery-ui-1.8.18.custom.css">
        <script type="text/javascript" src="vendor/jquery-ui-1.8.18.custom/jquery-ui-1.8.18.custom.min.js"></script>

        <script type="text/javascript" src="jquery.facetview.js"></script>

        <link rel="stylesheet" href="css/facetview.css">

        <link rel="stylesheet" href="css/style.css">

        <!-- Load c3.css -->
        <link href="vendor/c3-0.4.10/c3.css" rel="stylesheet" type="text/css">

        <!-- Load d3.js and c3.js -->
        <script src="vendor/d3-3.5.6/d3.min.js" charset="utf-8"></script>
        <script src="vendor/c3-0.4.10/c3.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.facet-view-simple').facetview({
                    "search_url": 'http://localhost:8983/solr/vidwan/select?',
                    "search_index": 'solr',
                    "datatype": 'json',
					
					
                    "facets": [
                        {'field': 'year', 'display': 'Publication Year'},
                        {'field': 'pub_type', 'display': 'Publication Type'},
						{'field': 'author', 'display': 'Author'},
						{'field': 'journal', 'display': 'Journal'},
						{'field': 'School', 'display': 'School'},
						{'field': 'Department', 'display': 'Department'}
                    ],
                    paging: {
                        from: 0,
                        size: 10
                    },
                    //"linechart_field": "title",
                    //"dendrogram_field": "issue",
                    "display_images": false,
                    "result_display": [
                        [
                            {
                                "pre": "<h4>",
                                "field": "title",
                                "post": "</h4>"
                            }
                        ],
                        [
                            {
                                "pre": "<b>id:  </b><text>",
                                "field": "publication_id",
                                "post": "</text>"
                            }
                        ],
                        
                           [
                            {
                                "pre": "<b>User id: </b><text>",
                                "field": "user_id",
                                "post": "</text>"
                            }
                        ],
                           [
                            {
                                "pre": "<b>Note:  </b><text>",
                                "field": "note",
                                "post": "</text>"
                            }
                        ],
                        [
                            {
                                "pre": "<b>Abstract:  </b><text>",
                                "field": "abstract",
                                "post": "</text>"
                            }
                        ],
                        [
                            {
                                "pre": "<b>Year:  </b><text>",
                                "field": "year",
                                "post": "</text>"
                            }
                        ],
                        [
                            {
                                "pre": "<b>School:  </b><text>",
                                "field": "School",
                                "post": "</text>"
                            }
                        ],
                         [
                            {
                                "pre": "<b>Department:  </b><text>",
                                "field": "Department",
                                "post": "</text>"
                            }
                        ],
                           [
                            {
                                "pre": "<b>Location:  </b><text>",
                                "field": "location",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Article Number:  </b><text>",
                                "field": "articleno",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Number of Pages :  </b><text>",
                                "field": "numpages",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>DOI:  </b><text>",
                                "field": "doi",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Page Start:  </b><text>",
                                "field": "page-start",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Page End:  </b><text>",
                                "field": "page-end",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Pages:  </b><text>",
                                "field": "pages",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Address:  </b><text>",
                                "field": "address",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Url:  </b><text>",
                                "field": "url",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Volume:  </b><text>",
                                "field": "volume",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Chapter:  </b><text>",
                                "field": "chapter",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Journal:  </b><text>",
                                "field": "journal",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Authoruthor:  </b><text>",
                                "field": "author",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Raw:  </b><text>",
                                "field": "raw",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Booktitle:  </b><text>",
                                "field": "booktitle",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Folder:  </b><text>",
                                "field": "folder",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Type:  </b><text>",
                                "field": "type",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Series:  </b><text>",
                                "field": "series",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>DURL:  </b><text>",
                                "field": "durl",
                                "post": "</text>"
                            }
                        ],
						   [
                            {
                                "pre": "<b>Power Point:  </b><text>",
                                "field": "powerpoint",
                                "post": "</text>"
                            }
                        ],
						    [
                            {
                                "pre": "<b>Infosite:  </b><text>",
                                "field": "infosite",
                                "post": "</text>"
                            }
                        ],
                            [
                            {
                                "pre": "<b>Website:  </b><text>",
                                "field": "website",
                                "post": "</text>"
                            }
                        ],
                            [
                            {
                                "pre": "<b>Publication Type:  </b><text>",
                                "field": "pub_type",
                                "post": "</text>"
                            }
                        ],
                            [
                            {
                                "pre": "<b>Editor:  </b><text>",
                                "field": "editor",
                                "post": "</text>"
                            }
                        ],
                            
                            
                           

                            
                        //author_first
                    ],
                    "linkify": true
                }
                );
                $('.facetview_filtershow').trigger("click");
            });
        </script>
    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#">Articles</a>
                    <ul class="nav">
                        
                    </ul>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="content">
                <div class="page-header">
                    <h1>
                        Articles Search
                    </h1>
                </div>

                <div class="facet-view-simple"></div>

            </div>

        </div>
    </body>
</html>
