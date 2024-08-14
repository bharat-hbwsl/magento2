<?php
namespace Magento\Framework\View\Layout\Data\Structure;

/**
 * Interceptor class for @see \Magento\Framework\View\Layout\Data\Structure
 */
class Interceptor extends \Magento\Framework\View\Layout\Data\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\App\State $state, ?array $elements = null)
    {
        $this->___init();
        parent::__construct($logger, $state, $elements);
    }

    /**
     * {@inheritdoc}
     */
    public function createStructuralElement($name, $type, $class)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createStructuralElement');
        return $pluginInfo ? $this->___callPlugins('createStructuralElement', func_get_args(), $pluginInfo) : parent::createStructuralElement($name, $type, $class);
    }

    /**
     * {@inheritdoc}
     */
    public function reorderChildElement($parentName, $childName, $offsetOrSibling, $after = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reorderChildElement');
        return $pluginInfo ? $this->___callPlugins('reorderChildElement', func_get_args(), $pluginInfo) : parent::reorderChildElement($parentName, $childName, $offsetOrSibling, $after);
    }

    /**
     * {@inheritdoc}
     */
    public function importElements(array $elements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importElements');
        return $pluginInfo ? $this->___callPlugins('importElements', func_get_args(), $pluginInfo) : parent::importElements($elements);
    }

    /**
     * {@inheritdoc}
     */
    public function exportElements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'exportElements');
        return $pluginInfo ? $this->___callPlugins('exportElements', func_get_args(), $pluginInfo) : parent::exportElements();
    }

    /**
     * {@inheritdoc}
     */
    public function createElement($elementId, array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createElement');
        return $pluginInfo ? $this->___callPlugins('createElement', func_get_args(), $pluginInfo) : parent::createElement($elementId, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getElement($elementId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElement');
        return $pluginInfo ? $this->___callPlugins('getElement', func_get_args(), $pluginInfo) : parent::getElement($elementId);
    }

    /**
     * {@inheritdoc}
     */
    public function hasElement($elementId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasElement');
        return $pluginInfo ? $this->___callPlugins('hasElement', func_get_args(), $pluginInfo) : parent::hasElement($elementId);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElement($elementId, $recursive = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetElement');
        return $pluginInfo ? $this->___callPlugins('unsetElement', func_get_args(), $pluginInfo) : parent::unsetElement($elementId, $recursive);
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($elementId, $attribute, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        return $pluginInfo ? $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo) : parent::setAttribute($elementId, $attribute, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($elementId, $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute($elementId, $attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function renameElement($oldId, $newId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renameElement');
        return $pluginInfo ? $this->___callPlugins('renameElement', func_get_args(), $pluginInfo) : parent::renameElement($oldId, $newId);
    }

    /**
     * {@inheritdoc}
     */
    public function setAsChild($elementId, $parentId, $alias = '', $position = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAsChild');
        return $pluginInfo ? $this->___callPlugins('setAsChild', func_get_args(), $pluginInfo) : parent::setAsChild($elementId, $parentId, $alias, $position);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($elementId, $alias = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        return $pluginInfo ? $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo) : parent::unsetChild($elementId, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function reorderChild($parentId, $childId, $position)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reorderChild');
        return $pluginInfo ? $this->___callPlugins('reorderChild', func_get_args(), $pluginInfo) : parent::reorderChild($parentId, $childId, $position);
    }

    /**
     * {@inheritdoc}
     */
    public function reorderToSibling($parentId, $childId, $siblingId, $offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reorderToSibling');
        return $pluginInfo ? $this->___callPlugins('reorderToSibling', func_get_args(), $pluginInfo) : parent::reorderToSibling($parentId, $childId, $siblingId, $offset);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildId($parentId, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildId');
        return $pluginInfo ? $this->___callPlugins('getChildId', func_get_args(), $pluginInfo) : parent::getChildId($parentId, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren($parentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        return $pluginInfo ? $this->___callPlugins('getChildren', func_get_args(), $pluginInfo) : parent::getChildren($parentId);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentId($childId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentId');
        return $pluginInfo ? $this->___callPlugins('getParentId', func_get_args(), $pluginInfo) : parent::getParentId($childId);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildAlias($parentId, $childId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildAlias');
        return $pluginInfo ? $this->___callPlugins('getChildAlias', func_get_args(), $pluginInfo) : parent::getChildAlias($parentId, $childId);
    }

    /**
     * {@inheritdoc}
     */
    public function addToParentGroup($childId, $groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addToParentGroup');
        return $pluginInfo ? $this->___callPlugins('addToParentGroup', func_get_args(), $pluginInfo) : parent::addToParentGroup($childId, $groupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($parentId, $groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        return $pluginInfo ? $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo) : parent::getGroupChildNames($parentId, $groupName);
    }
}
