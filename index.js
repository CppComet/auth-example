CometServer().start({dev_id:1668, user_id:3, user_key:"userHash", node:"app.comet-server.ru"})

CometServer().subscription("msg.event1", function(e){
    console.log(e)
})