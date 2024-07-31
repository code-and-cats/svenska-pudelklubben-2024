;(function (wp) {
  const { useState, useEffect, createElement, render } = wp.element
  const {
    BlockEditorProvider,
    BlockList,
    WritingFlow,
    ObserveTyping,
    BlockTools
  } = wp.blockEditor
  const { SlotFillProvider } = wp.components

  document.addEventListener('DOMContentLoaded', function () {
    const editorElement = document.getElementById('custom-sidebar-editor')
    const hiddenInputElement = document.getElementById('custom_sidebar_content')

    if (!editorElement || !hiddenInputElement) {
      return
    }

    const initialContent = hiddenInputElement.value

    const saveContent = (content) => {
      hiddenInputElement.value = content
    }

    const MyEditor = () => {
      const [blocks, updateBlocks] = useState(wp.blocks.parse(initialContent))

      useEffect(() => {
        const content = wp.blocks.serialize(blocks)
        saveContent(content)
      }, [blocks])

      return createElement(
        SlotFillProvider,
        null,
        createElement(
          BlockEditorProvider,
          { value: blocks, onInput: updateBlocks, onChange: updateBlocks },
          createElement(
            BlockTools,
            null,
            createElement(
              WritingFlow,
              null,
              createElement(ObserveTyping, null, createElement(BlockList, null))
            )
          )
        )
      )
    }

    render(createElement(MyEditor), editorElement)
  })
})(window.wp)
