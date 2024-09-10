const editHeader = () => {
  return (
    <div>Header</div>
  )
}

const saveHeader = () => {
  return (
    <div>Header</div>
  )
}

wp.blocks.registerBlockType('ourblocktheme/header', {
  title: 'Header',
  edit: editHeader,
  save: saveHeader
})