<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        text-align: center;
    }
</style>

<body>

    <nav class="navbar-menu is-white" style="height: 80px;padding: 0px 60px" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <img src="assets/images/Logo1.png" alt="">
        </div>
        <div class="navbar-end">
            <div class="columns is-vcentered is-gapless">
                <div class="column">
                    <p class="has-text-grey-light" style="width: 120px;"><i>Handicrafted by</i></p>
                    <p><b>HLSolutions</b></p>
                </div>
                <div class="column">
                    <img src="assets/images/Logo2.png" alt="" style="border-radius:50%; padding-top:10px" width="70">
                </div>

            </div>
        </div>
    </nav>
    <section class="hero is-success  " style="height: 200px;">
        <div class="hero-body">
            <p class="title">
                A joke a day keeps the doctor away
            </p>
            <p class="subtitle is-6">
                if you joke wrong way, your teeth have to pay. (Serious)
            </p>
        </div>
    </section>

    <section class="hero is-small is-white ">
        <div class="hero-body">
            <div class="container" style="width: 900px;">
                <div class="notification is-white" style="padding-bottom: 100px;">
                    @if(isset($joke))
                    <p align="left" class="has-text-grey-dark is-size-5">{{$joke->content}}</p>
                   
                </div>
                <form action="{{route('votingjoke.post',[$joke->id])}}" method="post">
                    {{csrf_field()}}
                    <button class="button is-link" name="action" value="fun">
                        <p style="width: 150px">This is Funny!</p>
                    </button>
                    <button class="button is-success" name="action" value="notFun">
                        <p style="width: 150px">This is not Funny! </p>
                    </button>
                </form>
                @else
                <article class="message is-success">
                    <div class="message-header">
                        <p>Success</p>
                       
                    </div>
                    <div class="message-body">
                        That's all the jokes for today! Come back another day!
                    </div>
                </article>

                @endif








            </div>


        </div>

        </div>
    </section>
    <hr style="border: 1px solid; margin:0 " class="has-text-grey-light">
    <footer class="footer has-background-primary-white " style="padding-bottom: 48;">
        <div class="content has-text-centered ">
            <p class="has-text-grey-light">
                This website is created as part of HLSolutions on developer program. The materials contained on this website are provied for general <br>
                infomation only and do not consitute and form and advice. HLSolutions assumes no responsibility for the accuracy of any particular statement and <br>
                accepts no liability for any loss damage which may arise from reliance on the information contained on this website.<br>
            </p>
            <p class="has-text-grey-dark">Coppyright 2021 HLSolutions Pte.Ltd</p>
        </div>
    </footer>

</body>

</html>