<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace Magento\Contact\Test\Unit\Block;

use MageToday\Comment\Block\CommentList;

class CommentListTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageToday\Comment\Block\CommentList
     */
    protected $commentList;

    /**
     * @var \Magento\Framework\View\Element\Template\Context|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $contextMock;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {

        $this->contextMock = $this->getMockBuilder(\Magento\Framework\View\Element\Template\Context::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->commentList = new CommentList(
            $this->contextMock
        );
    }

    /**
     * @return void
     */
    public function testIsTrue()
    {
        $this->assertTrue($this->commentList->isTrue());
    }

    /**
     * @return void
     */
    public function testGetComment()
    {
        $this->returnValueMap($this->commentList->getComments());
    }

    /**
     * @return void
     */
    public function testGetCommentEqual()
    {
        $this->assertEquals([
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'In tincidunt metus et facilisis suscipit.',
            'In ultrices augue eleifend mi laoreet porta.',
            'Curabitur dictum eros nec enim rutrum varius.',
            'Nullam finibus leo sit amet metus lobortis sagittis.',
            'Sed maximus mi ut massa feugiat fringilla.',
            'Vestibulum a nulla et enim convallis fringilla ut et erat.',
        ], $this->commentList->getComments());
    }
}
