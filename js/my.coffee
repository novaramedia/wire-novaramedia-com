l = (data) ->
  console.log data

animationLength = 200

singlePost = $('.single-post')
relatedPosts = $('.js-post-related')
postCopy = $('.js-post')

jQuery(document).ready ($) ->

  $.getScript "http://tools.novaramedia.com/tool/novara_live/schedule.min.js", ->
    if isLive()
      $("#livenow").css {
        height: 20
        paddingTop: 8
        paddingBottom: 8
      }
    setInterval (->
      if isLive()
        $("#livenow").css {
          height: 20
          paddingTop: 8
          paddingBottom: 8
        }
      return
    ), 15000
    return

  $('.js-toggle-drawer').click ->
    $('#drawer-main').slideToggle(animationLength)

  $('.js-toggle-tags').click ->
    $('#drawer-tags').slideToggle(animationLength)

  $('.masonry').each ->
    t = $(this)
    $(this).imagesLoaded ->
      t.masonry()

  if singlePost
    relatedPosts.imagesLoaded ->
      layoutRelated()

    $(window).resize ->
      layoutRelated()

layoutRelated = ->
  relatedPostsH = relatedPosts.height()
  postCopyH = postCopy.height()
  marginTop = (postCopyH-relatedPostsH)
  if marginTop > 0
    relatedPosts.css 'margin-top', (marginTop)+'px'