<style>
	.tags{
		margin-top:5px;
		padding:0;
		list-style:none;
		display:inline-block;
	}	
	li.tag, .tag a{
		float:left;
		height:18px;
		line-height:18px;
		position:relative;
		font-size:11px;
		margin:1px;
	}	
	.tag a{
		margin-left:14px;
		padding:0 7px 0 9px;
		background:black;
		color:white;
		text-decoration:none;	
	}	
	.tag a:before{
		content:"";
		float:left;
		position:absolute;
		top:0;
		left:-9px;
		width:0;
		height:0;
		border-color:transparent black transparent transparent;
		border-style:solid;
		border-width:9px 9px 9px 0;		
	}	
	.tag a:after{
		content:"";
		position:absolute;
		top:8px;
		left:0;
		float:left;
		width:4px;
		height:4px;
		-moz-border-radius:2px;
		-webkit-border-radius:2px;
		border-radius:2px;
		background:#fff;
	}		

	.tag a:hover{
		background:#404040;
	}	
	.tag a:hover:before{
		border-color:transparent #404040 transparent transparent;
	}
</style>
<style>
	/*
	Animate.css - http://daneden.me/animate
	LICENSED UNDER THE  MIT LICENSE (MIT)

	Copyright (c) 2012 Dan Eden

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	*/

	.animated {
		-webkit-animation-fill-mode: both;
		-moz-animation-fill-mode: both;
		-ms-animation-fill-mode: both;
		-o-animation-fill-mode: both;
		animation-fill-mode: both;
		-webkit-animation-duration: .75s;
		-moz-animation-duration: .75s;
		-ms-animation-duration: .75s;
		-o-animation-duration: .75s;
		animation-duration: .75s;
	}
	
	@-webkit-keyframes swing {
		20%, 40%, 60%, 80%, 100% { -webkit-transform-origin: top center; }
		20% { -webkit-transform: rotate(15deg); }	
		40% { -webkit-transform: rotate(-10deg); }
		60% { -webkit-transform: rotate(5deg); }	
		80% { -webkit-transform: rotate(-5deg); }	
		100% { -webkit-transform: rotate(0deg); }
	}

	@-moz-keyframes swing {
		20% { -moz-transform: rotate(15deg); }	
		40% { -moz-transform: rotate(-10deg); }
		60% { -moz-transform: rotate(5deg); }	
		80% { -moz-transform: rotate(-5deg); }	
		100% { -moz-transform: rotate(0deg); }
	}

	@-o-keyframes swing {
		20% { -o-transform: rotate(15deg); }	
		40% { -o-transform: rotate(-10deg); }
		60% { -o-transform: rotate(5deg); }	
		80% { -o-transform: rotate(-5deg); }	
		100% { -o-transform: rotate(0deg); }
	}

	@keyframes swing {
		20% { transform: rotate(15deg); }	
		40% { transform: rotate(-10deg); }
		60% { transform: rotate(5deg); }	
		80% { transform: rotate(-5deg); }	
		100% { transform: rotate(0deg); }
	}

	.swing:hover {
		-webkit-transform-origin: top center;
		-moz-transform-origin: top center;
		-o-transform-origin: top center;
		transform-origin: top center;
		-webkit-animation-name: swing;
		-moz-animation-name: swing;
		-o-animation-name: swing;
		animation-name: swing;
	}
	
</style>