<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	 <div id="root"></div>
    <script src="https://unpkg.com/react@16.6.3/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.6.3/umd/react-dom.production.min.js"></script>
    <script>
    	
    let createElement = React.createElement

      let rootElement =
        createElement('div', {}, 
          createElement('h1', {}, "Contacts"),
          createElement('ul', {},
            createElement(
              'li',
              {},
              createElement(
                'a',
                { href: 'mailto:james@frontarm.com' },
                "James Nelson",
              ),
            ),
            createElement(
              'li',
              {},
              createElement(
                'a',
                { href: 'mailto:me@example.com' },
                "Me"
              )
            )
          )
        )

let domNode = document.getElementById("root")
ReactDOM.render(rootElement,domNode)
    </script>
</body>
</html>