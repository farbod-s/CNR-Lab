/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/SyntaxHighlighter
 *
 * SyntaxHighlighter is donationware. If you are using it, please donate.
 * http://alexgorbatchev.com/SyntaxHighlighter/donate.html
 *
 * @version
 * 3.0.83 (July 02 2010)
 * 
 * @copyright
 * Copyright (C) 2004-2010 Alex Gorbatchev.
 *
 * @license
 * Dual licensed under the MIT and GPL licenses.
 */
;(function()
{
	// CommonJS
	typeof(require) != 'undefined' ? SyntaxHighlighter = require('shCore').SyntaxHighlighter : null;

	function Brush()
	{
		// Contributed by Sean Westwood
	
		var funcs = 
			
'read.table read.csv read.data names table matrix data file.show attach detach library print fix edit summary mode length str c vector paste dim object array as.matrix is.matrix numeric list unlist factor cbind rbind args margin.table tapply levels lapply sapply split unsplit solve backsolve forwardsolve t uniroot polyroot optimize nlm deriv log log10 sqrt exp sin cos tan acos asin atan cosh sinh tanh gamma lgamma choose lchoose bessel abs sign sum prod diff cumsum cumprod min max pmax pmin range length diag scale nrow ncol length append drop det eigen svd qr chol chol2inv eigen mean var cov cor sd mad median range IQR fivenum quantile mahalanobis sort rev order rank sort.list ceiling floor round trunc signif zapsmall jitter all duplicated unique any lower.tri upper.tri approx approxfun spline splinefun curve mean par mfrow par axis box lines abline segments points text mtext title labels legend plotmath arrows polygon Hershey plot.window xy.coords rug colors hsv rgb rainbow gray palette sample set.seed RNGkind .Random.seed d p q r chisq t F norm binom pois exp beta gamma lnorm unif geom cauchy logis hyper nbinom weibull wilcox t.test prop.test binom.test wilcox.test kruskal.test ansari.test bartlett.test cor.test fisher.test fligner.test friedman.test ks.test mantelhaen.test mcnemar.test mood.test airwise.prop.test pairwise.t.test pairwise.wilcox.test print.pairwise.htest prop.trend.test quade.test shapiro.test var.test chisq.gof ks.gof contrast contrasts p.adjust pairwise.t.test pairwise.table ptukey qtukey power.prop.test power.t.test print.power.htest anova aov lm glm loglin manova fitted add1 drop1 resid deviance predict coef effect dummy.coef fitted.values alias step factor interaction model.tables proj plot summary table colnames head subset graph.data.frame get.edge.attribute set.vertex.attribute get.vertex.attribute delete.edges get.edge.attribute set.edge.attribute layout.fruchterman.reingold V E write.graph degree subcomponent shortest.paths graph.density reciprocity transitivity triad.census as.undirected get.adjacency rep delete.vertices dist hclust walktrap.community edge.betweenness.community as.dendrogram saveMovie getwd community.to.membership blockmodel graph.coreness graph.ring add.edges edge.betweenness clusters seq closeness betweenness evcent barplot hist dotplot names.arg read.delim row.names graph.incidence pdf png dev.off() simplify count.multiple apply graph.adjacency is.na density btwcnt tkplot.getcoords tkplot degree.distribution reshape as.character image rexp expression match lnam ifelse t.test wilcox.test matchit wtd.mean  wtd.var boot merge network ergm QAP mcmc.diagnostics as.network nodematch edgecov gof help rm gc write.csv write.edgelist write.graph write.graph.to.sonia runif start end end.time start.time frame.shape shape vertices';

    
		var keywords =  
			'function return if cons.expr  else  alt.expr for while repeat break next NA NaN in layout cex edge.arrow.size modularity steps use.modularity TRUE FALSE T interval F outdir vertex.color edge.label.color edge.label.font main xlab ylab dec col adj font which na.strings check.names layout.fruchterman.reingold.grid label label.color size frame.color color width height name layout.kamada.kawai weighted arrow.size weight directed n rate neighbors x y W2 X INDEX FUN burnin MCMCsamplesize verbose seed maxit calc.mcmc.se vertex.col vertex.size vertex.label lty index package layout.kamada.kawai';
    
		this.regexList = [
			{ regex: new RegExp('#[^!].*$', 'gm'),					css: 'comments' },
			{ regex: SyntaxHighlighter.regexLib.doubleQuotedString,	css: 'string' },
			{ regex: SyntaxHighlighter.regexLib.singleQuotedString,	css: 'string' },
			{ regex: new RegExp(this.getKeywords(funcs), 'gmi'),	css: 'functions' },
			{ regex: new RegExp(this.getKeywords(keywords), 'gm'),	css: 'keyword' }
		    ];

		this.forHtmlScript(SyntaxHighlighter.regexLib.phpScriptTags);
	}

	Brush.prototype	= new SyntaxHighlighter.Highlighter();
	Brush.aliases		= ['R', 'r'];

	SyntaxHighlighter.brushes.R = Brush;

	// CommonJS
	typeof(exports) != 'undefined' ? exports.Brush = Brush : null;
})();
