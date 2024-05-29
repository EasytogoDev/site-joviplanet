require 'pathname'

module Jekyll
  module DocumentUrl
    def document_url(url)
      pageUrl = @context.registers[:page]["url"]

      if @context.registers[:page]["name"] === "index.html"
         pageUrl = pageUrl + "index.html";
      end

      pageDir = Pathname(pageUrl).parent
      Pathname(url).relative_path_from(pageDir).to_s
    end
  end
end

Liquid::Template.register_filter(Jekyll::DocumentUrl)