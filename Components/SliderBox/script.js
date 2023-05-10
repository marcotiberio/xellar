import Swiper, { Navigation, A11y, Autoplay, Pagination } from 'swiper'
import 'swiper/css/bundle'
import { buildRefs, getJSON } from '@/assets/scripts/helpers.js'

export default function (sliderBox) {
  const refs = buildRefs(sliderBox)
  const data = getJSON(sliderBox)
  const swiper = initSlider(refs, data)
  return () => swiper.destroy()
}

function initSlider (refs, data) {
  const { options } = data
  const config = {
    modules: [Navigation, A11y, Autoplay, Pagination],
    a11y: options.a11y,
    slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: {
      nextEl: refs.next,
      prevEl: refs.prev
    },
    pagination: {
      el: refs.dots,
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1181: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    }
  }
  if (options.autoplay && options.autoplaySpeed) {
    config.autoplay = {
      delay: options.autoplaySpeed
    }
  }

  return new Swiper(refs.slider, config)
}
