import ScrollTrigger from '@terwanerik/scrolltrigger'

const trigger = new ScrollTrigger()
trigger.add('[data-trigger]', {
  once: true,
  offset: {
    element: {
      x: 0,
      y: (trigger, rect, direction) => {
        return 0.1
      }
    },
    viewport: {
      x: 0,
      y: (trigger, frame, direction) => {
        return trigger.visible ? 0 : 0.1
      }
    }
  }
})
