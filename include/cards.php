<html>
    <head>
        <style>
            .column {
              float: left;
              width: 50%;
              padding: 0 10px;
            }

            /* Remove extra left and right margins, due to padding in columns */
            .row {
                margin: 0 -5px;
                background-color: #CF5C36;
                height: 500px;
                padding: 100px 100px;
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }

            /* Style the counter cards */
            .card {
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
              padding: 16px;
              text-align: center;
              background-color: white;
            }

            /* Responsive columns - one column layout (vertical) on small screens */
            @media screen and (max-width: 600px) {
              .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
              }
            }
        </style>
    </head>
    <body>
        <div>
            <div class="row">
              <div class="column">
                <div class="card">
                    <h2>I'm an Investor</h2><br/>
                    <h4>See top business plans to invest</h4><br/>
                    <a href=<?php echo "$top_posts_url" ?> class="btn btn-primary btn-lg" role="button">View Top Posts</a>
                </div>
              </div>
              <div class="column">
                <div class="card">
                    <h2>I'm a Startup</h2><br/>
                    <h4>Register now to get investment to kickstart your venture</h4><br/>
                    <a href=<?php echo "$register_url" ?> class="btn btn-success btn-lg" role="button">Register Here</a>
                  </div>
              </div>
            </div>
        </div>
    </body>
</html>