<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Controller\Index;
 
use Magento\Framework\App\Action\Context;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\LocalizedException;
use MageToday\Comment\Model\CommentFactory;

class Post extends \Magento\Framework\App\Action\Action
{

    /**
     * @var LoggerInterface
     */
    private $logger;

     /**
     * Comment factory
     *
     * @var CommentFactory
     */
    protected $_commentFactory;
    
    /**
     * @param Context $context
     * @param LoggerInterface $logger
     * @param LoggerInterface $logger
     */
    public function __construct(
        Context $context,
        LoggerInterface $logger = null,
        CommentFactory $commentFactory
    ) {
        parent::__construct($context);
        $this->logger = $logger ?: ObjectManager::getInstance()->get(LoggerInterface::class);
        $this->_commentFactory = $commentFactory;
    }
 
    public function execute()
    {

        if (!$this->getRequest()->isPost()) {
            return $this->resultRedirectFactory->create()->setPath('*/*/');
        }
        try {
            
            $parms = $this->validatedParams();

            $object = $this->_commentFactory->create();
            $object->addData($parms);
            $object->save();

        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
            
        } catch (\Exception $e) {
            $this->logger->critical($e);
            $this->messageManager->addErrorMessage(
                __('An error occurred while processing your form. Please try again later.')
            );
        }

        return $this->resultRedirectFactory->create()->setPath('*/*/');
    }


    /**
     * @return array
     * @throws \Exception
     */
    private function validatedParams()
    {
        $request = $this->getRequest();

        if (!is_numeric($request->getParam('rating'))) {
            throw new LocalizedException(__('Necessary a rating'));
        }
        if (trim($request->getParam('comment')) === '') {
            throw new LocalizedException(__('Comment is missing'));
        }
        if (false === \strpos($request->getParam('email'), '@')) {
            throw new LocalizedException(__('Invalid email address'));
        }
        if (trim($request->getParam('hideit')) !== '') {
            throw new \Exception();
        }

        return $request->getParams();
    }
}